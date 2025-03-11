<h1>Student Name</h1>
@if($errors->any())
@foreach($errors->all() as $error)
    <div style="color:red">
        {{ $error }}
    </div>
  @endforeach
  @endif  
<form action="/submit" method="post">
@csrf 
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" ><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="30"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>