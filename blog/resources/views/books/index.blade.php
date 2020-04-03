<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="green">
	list of books
   <a href="books/create">AddBook</a>
  <table border="1">
  	<tr>
      <th>name</th>
      <th>author</th>
      <th>action</th>
  	</tr>
  	
  	@foreach($books as $value)
  	<tr>
  	<td>{{$value->getName()}}</td>
  	<td>{{$value->getAuthor()}}</td>
    <td>{{$value->getPrice()}}</td>
  	<td><form action="books/{{$value->getId()}}/edit" method="GET">
           <button type="submit">edit</button>
    </form></td>
     

  	 @endforeach
    </tr>
  </table>

</body>
</html>