<h1>Giriş Yapın</h1>

<form action="{{route('admin')}}" method="POST" name="admin">
    @csrf
    <input name="username" type="text">
    <input name="password" type="password">
    <input type="submit">
</form>
