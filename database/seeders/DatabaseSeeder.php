<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        // User::truncate();
        // Post::truncate();
        // Category::truncate();
        $user = User::factory()->create([
            'name' => 'Achal Lalwani',
            'email' => 'achal@pixelvide.com'
        ]);
        

        $post = Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // echo($user);

        // $personal = Category::create([
        //     'slug' => 'personal',
        //     'name' => 'Personal'
        // ]);
        // $work = Category::create([
        //     'slug' => 'work',
        //     'name' => 'Work'
        // ]);
        // $hobbies = Category::create([
        //     'slug' => 'hobbies',
        //     'name' => 'Hobbies'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure esse unde amet dignissimos ex aliquam impedit, eius nobis voluptates sint ut architecto ipsum quod expedita, magni ipsam nihil, id doloremque.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, temporibus enim. Doloremque excepturi quisquam, ipsum hic quod eum earum, ea reprehenderit mollitia expedita laboriosam esse consequatur libero optio culpa officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, ea unde. Earum, quo! Explicabo odio repudiandae labore animi facilis ullam, perspiciatis iste, vel tempore fuga repellat adipisci! Vero, atque quis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat doloribus quia ipsum nobis quas, natus recusandae molestiae cupiditate excepturi, sint reprehenderit pariatur officiis veniam ipsam voluptas. Alias voluptates aliquid saepe! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum fuga qui distinctio consectetur magnam reprehenderit dolorem veniam, explicabo aperiam alias quasi aliquam sint sequi facilis ad id ducimus quibusdam molestiae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima voluptatibus accusantium cupiditate architecto beatae nihil dicta exercitationem eaque iusto eligendi, excepturi numquam ipsa. Magnam fugit odio illo ratione, aliquam voluptate.'

        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure esse unde amet dignissimos ex aliquam impedit, eius nobis voluptates sint ut architecto ipsum quod expedita, magni ipsam nihil, id doloremque.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, temporibus enim. Doloremque excepturi quisquam, ipsum hic quod eum earum, ea reprehenderit mollitia expedita laboriosam esse consequatur libero optio culpa officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, ea unde. Earum, quo! Explicabo odio repudiandae labore animi facilis ullam, perspiciatis iste, vel tempore fuga repellat adipisci! Vero, atque quis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat doloribus quia ipsum nobis quas, natus recusandae molestiae cupiditate excepturi, sint reprehenderit pariatur officiis veniam ipsam voluptas. Alias voluptates aliquid saepe! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum fuga qui distinctio consectetur magnam reprehenderit dolorem veniam, explicabo aperiam alias quasi aliquam sint sequi facilis ad id ducimus quibusdam molestiae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima voluptatibus accusantium cupiditate architecto beatae nihil dicta exercitationem eaque iusto eligendi, excepturi numquam ipsa. Magnam fugit odio illo ratione, aliquam voluptate.'

        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $hobbies->id,
        //     'title' => 'My Hobbies Post',
        //     'slug' => 'my-hobbies-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure esse unde amet dignissimos ex aliquam impedit, eius nobis voluptates sint ut architecto ipsum quod expedita, magni ipsam nihil, id doloremque.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, temporibus enim. Doloremque excepturi quisquam, ipsum hic quod eum earum, ea reprehenderit mollitia expedita laboriosam esse consequatur libero optio culpa officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, ea unde. Earum, quo! Explicabo odio repudiandae labore animi facilis ullam, perspiciatis iste, vel tempore fuga repellat adipisci! Vero, atque quis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat doloribus quia ipsum nobis quas, natus recusandae molestiae cupiditate excepturi, sint reprehenderit pariatur officiis veniam ipsam voluptas. Alias voluptates aliquid saepe! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum fuga qui distinctio consectetur magnam reprehenderit dolorem veniam, explicabo aperiam alias quasi aliquam sint sequi facilis ad id ducimus quibusdam molestiae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima voluptatibus accusantium cupiditate architecto beatae nihil dicta exercitationem eaque iusto eligendi, excepturi numquam ipsa. Magnam fugit odio illo ratione, aliquam voluptate.'

        // ]);

    }
}
