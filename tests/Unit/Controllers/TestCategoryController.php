<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Database\Connection;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\ParameterBag;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Repositories\CategoryRepository;
use Faker\Factory as Faker;


class TestCategoryController extends TestCase
{
    // public function test_index_returns_view()
    // {
    //     $controller =  new CategoryController();
    //     $view = $controller->index();
    //     $this->assertEquals('admin.categories.show', $view->getName());
    //     $this->assertArrayHasKey('categories', $view->getData());
    // }
    protected $category;
    public function setUp() : void
    {
        parent::setUp();
        $this->faker = Faker::create();
        $this->category = [
            'title' => $this->faker->name,
            'desc' => $this->faker->text,
        ];
        $this->categoryRepository = new CategoryRepository();

    }
    public function testStore()
    {
        $category = $this->categoryRepository->storeCategory($this->category);
        // Kiểm tra xem kết quả trả về có là thể hiện của lớp Category hay không
        $this->assertInstanceOf(Category::class, $category);
        // Kiểm tra data trả về
        $this->assertEquals($this->category['title'], $category->title);
        $this->assertEquals($this->category['desc'], $category->desc);
        // Kiểm tra dữ liệu có tồn tại trong cơ sở dữ liệu hay không
        $this->assertDatabaseHas('categories', $this->category);
    }
    public function testShow()
    {
        $category = factory(Category::class)->create();
        $found = $this->categoryRepository->showCategory($category->id);
        $this->assertInstanceOf(Category::class, $found);
        $this->assertEquals($found->title, $category->title);
        $this->assertEquals($found->desc, $category->desc);
    }
    /*public function testUpdate()
    {
        // Tạo dữ liệu mẫu
        $category = factory(Category::class)->create();
        $newCategory = $this->categoryRepository->updateCategory($this->category, $category);
        // Kiểm tra dữ liệu trả về
        $this->assertInstanceOf(Category::class, $newCategory);
        $this->assertEquals($newCategory->title, $this->category['title']);
        $this->assertEquals($newCategory->desc, $this->category['desc']);
        // Kiểm tra xem cơ sở dữ liệu đã được cập nhập hay chưa
        $this->assertDatabaseHas('categories', $this->category);
    }*/
   public function testDestroy()
    {
        $cat = Category::create([
            'title' => "Percent1",
            'desc' => "100%",
        ]);
        $del =  $cat->delete();
        $this->assertTrue($del);
    }
    public function test_can_show_category()
    {
        $cat = factory(Category::class)->create();
        $this->get('/categories')->assertStatus(200);
    }
}
