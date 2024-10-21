<h1>Connexion</h1>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="content">

<form action="{{route('controle')}}" method="POST" class="form-control" >
@csrf
   
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
  
    <button type="submit" class="btn btn-primary">Se connecter</button>
  </form>
  <ul>

    @foreach ($errors->all() as $item)
        <li>{{$item}}</li>
    @endforeach
   
  </ul>
  <a href="{{route('home')}}">S'incrire</a>
</div>