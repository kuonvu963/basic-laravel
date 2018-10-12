<form action="/send-mail" method="post">
    @csrf
    <input type="email" name="email">
    <button type="submit">Send</button>
</form>
