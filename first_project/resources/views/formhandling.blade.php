<h1>Student Name</h1>

<form action="/submitform" method="post">
@csrf 
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="30" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>