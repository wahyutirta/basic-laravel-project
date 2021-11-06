<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, nemo consequatur mollitia ea deserunt id a neque non vitae culpa soluta, aut illum aliquid sequi voluptatum aspernatur eligendi minima repellat praesentium.</p> <p>Vel culpa totam tempora? Perspiciatis esse nulla dolor similique commodi aliquid et placeat ex tenetur veniam magnam reprehenderit voluptatibus consectetur voluptatum ullam ut, quos itaque cum reiciendis officiis!</p> <p>Dolorum autem ducimus cum necessitatibus molestiae velit assumenda similique ullam. Expedita aliquam temporibus adipisci blanditiis? Provident ratione sapiente mollitia!</p> <p> Necessitatibus sint temporibus suscipit? Vitae officia quidem neque optio quo, error aut debitis, natus ipsam ducimus itaque quibusdam dolorum iusto, molestias cupiditate.</p>",
        ]);

        DB::table('posts')->insert([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'body' => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi laudantium nobis cupiditate, architecto similique laboriosam? Sunt impedit consequatur iure eligendi quod consequuntur praesentium in vero molestiae nulla aperiam minus fugit quibusdam ex, nihil quidem labore tenetur enim illo adipisci.</p> <p>Ipsam, labore deserunt commodi est maiores eius? Obcaecati nam suscipit dolorem modi at aspernatur dignissimos laudantium maiores doloremque veritatis id, consequatur deserunt mollitia sed, impedit in ullam ab?</p> <p>Aperiam sequi laboriosam impedit adipisci unde nobis. Cupiditate porro nesciunt ab nostrum ipsum eos commodi eum quaerat sequi, rerum est dignissimos ratione et vel deserunt doloremque.</p> <p> Dolorem odit, sunt ea non dolorum, illum earum fuga accusamus deserunt commodi corrupti sapiente iure optio accusantium unde illo nisi provident? Quo, deleniti. Velit voluptatem nulla accusamus?</p>
            ",
        ]);

        DB::table('posts')->insert([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'body' => "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam laborum quasi, dignissimos velit animi, facere quas soluta aspernatur eum at consequatur tempora ad aliquid esse.</p> <p>Tempore consequuntur id debitis laboriosam nobis veniam et sit rem autem beatae optio modi fuga, quia quae impedit amet delectus aperiam minima expedita.</p> <p>Laborum quaerat laboriosam vel ducimus dignissimos natus cum harum, eaque similique molestiae fugiat odit ipsa error sit! Placeat, porro! Vel quas molestiae, natus labore adipisci corrupti aliquid facilis soluta, delectus asperiores officiis enim quod.</p> <p>Distinctio veniam sint ut pariatur incidunt, repudiandae quam enim sed quis tenetur animi vero excepturi, perspiciatis saepe magni voluptate nulla a, nemo in ipsa debitis aliquid nihil.</p> <p>Necessitatibus iure doloremque, hic laudantium sint asperiores maxime placeat earum quos tenetur natus voluptatum labore fugiat minus alias quis quasi. Facere incidunt libero corporis nesciunt blanditiis! Aperiam, laudantium ratione? Rem quo laboriosam saepe accusantium eum quisquam ducimus enim, adipisci sunt molestiae!</p>
            ",
        ]);
    }
}
