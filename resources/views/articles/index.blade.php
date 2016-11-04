<h1>articles</h1>
{!!link_to_route('articles/create','new Article')!!}
<table>
	<caption>table title and/or explanatory text</caption>
	<thead>
		<tr>
			<th>edit</th>
			<th>delete</th>
			<th>title</th>
		</tr>
		@foreach ($article as $article)
		<tr>
			<td>{!!link_to_route('articles/edit','Edit', $article->id)!!}</td>
			<td>
				{!!Form::open(['method'=>'DELETE','route'=>['articles/destroy', $articles->id}]!!)}

				<button type="submit">delete</button>
				{!!Form::close()!!}

				<td>{!!link_to_route('articles/show','$article->title', $article->id)!!}</td>

			</td>
		</tr>

		@endforeach 
	</thead>
	<tbody>
		<tr>
			<td>data</td>
		</tr>
	</tbody>
</table>