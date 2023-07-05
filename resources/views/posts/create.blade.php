<form method="post" action="{{route('post.insert')}}">
@csrf
    <label class="form-label" for="Name"> </label>
    Name<input class="form-control" type="text" placeholder="Name" id="Name" name="Name">



    <label class="form-label" for="Age"> </label>
    Date of Birth<input class="form-control" type="date" placeholder="Date of Birth" id="Age" name="Age">


        <label class="form-label" for="height"> </label>
        Height<input class="form-control" type="number" placeholder="Height" id="height" name="height">


        <label class="form-label" for="phone"> </label>
        Phone Number<input class="form-control" type="tel"  placeholder="Phone Number" id="tel" name="phone">



        <label class="form-label" for="email"> </label>
        mail<input class="form-control" type="email" placeholder="Email" id="email" name="email">



        <label class="form-label" for="password"> </label>
        password<input class="form-control" type="password" placeholder="Password" id="password" name="password">



<input class="btn btn-success w-100" type="submit" value="Done">
</form>
