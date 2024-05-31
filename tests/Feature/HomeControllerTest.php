<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use Tests\TestCase;

// Services
use App\Services\CategoryService\CategoryServiceInterface as CategoryService;
use App\Services\InformationService\InformationServiceInterface as InformationService;
use App\Services\NewsService\NewsServiceInterface as NewsService;

// Models
use App\Models\Information;
use App\Models\News;
use App\Models\Category;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $informationService;
    protected $newsService;
    protected $categoryService;

    /**
     * Set up the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();
    
        // Mock services for dependency injection
        $this->categoryService    = Mockery::mock(CategoryService::class);
        $this->informationService = Mockery::mock(InformationService::class);
        $this->newsService        = Mockery::mock(NewsService::class);

        // Bind mock instances to the Laravel app container
        $this->app->instance(CategoryService::class, $this->categoryService);
        $this->app->instance(InformationService::class, $this->informationService);
        $this->app->instance(NewsService::class, $this->newsService);
    }

    /**
     * Test for fetching index view with correct data.
     * @test
     */
    public function test_index_returns_correct_data(): void
    {
        // Arrange
        $categories  = Category::factory()->count(3)->create();
        $information = Information::factory()->count(11)->create();
        $newsItems   = News::factory()->count(11)->create();

        // Act
        $this->categoryService
            ->shouldReceive('getAllWithIdKeys')
            ->once()
            ->andReturn($categories);
        $this->informationService
            ->shouldReceive('getAll')
            ->once()
            ->andReturn($information);
        $this->newsService
            ->shouldReceive('getAll')
            ->once()
            ->andReturn($newsItems);

        $response = $this->get(route('home.index'));

        // Assert
        $response->assertViewIs('home.index')
            ->assertViewHas('information', $information)
            ->assertViewHas('newsItems', $newsItems)
            ->assertViewHas('categories', $categories);
    }

    /**
     * Tear down method to close Mockery mocks after each test.
     */
    protected function tearDown(): void
    {
        parent::tearDown();
        Mockery::close();
    }
}
