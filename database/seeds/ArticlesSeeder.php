<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
			//
		DB::insert('INSERT INTO `articles`( `name`, `text`, `img`) VALUE(?, ?, ?)', [
		  'Blog post',
		  '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda cumque nihil provident quae? A amet architecto aut autem beatae consectetur cum delectus deserunt dignissimos dolore dolorem esse explicabo facere facilis fugiat hic id, incidunt iste, laborum, libero mollitia natus non numquam omnis optio pariatur perspiciatis quidem quisquam recusandae repudiandae rerum saepe sequi
		sunt ullam unde voluptas voluptatem. Ab accusamus aperiam, assumenda commodi culpa cupiditate debitis distinctio esse est id iusto magnam numquam obcaecati perferendis qui quibusdam rem sit, temporibus. Deserunt excepturi laboriosam odit quia sit. Architecto blanditiis eos et eum iusto, natus nobis non pariatur provident sapiente sed suscipit.</p>',
		  'pic1.jpg'

		]);

		$article = new Article;
		$article->name = 'Sample blog post 3';
		$article->text = 'hello world';
		$article->img = 'pic4.jpg';
		$article->save();
    }
}
?>