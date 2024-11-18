<form name-"employee-form" id="employee-form" method="post" action="{{url ('store-form') }}">
    @csrf
    <div class-"form-group">
        <label for="nane">Name</label>
        <input type="text" id="nane" name-"name" class="farm-control" required="true">
    </div>
    <div class-"form-group">
        <label for="age">Age</label>
        <input type="text" id="age" name-"age" class="farm-control" required="true">
    </div>
    <div class-"form-group">
        <label for="position">Position</label>
        <input type="text" id="position" name-"position" class="farm-control" required="true">
    </div>
    <div class-"form-group">
        <label for="enall">Email</label>
        <input type="email" id="email" name="email" class="form-control" required="true">
    </div>
    <div class-"fam-group">
        <label for="work Data">workData</label>
        <textarea name="workData" class-"form-control" required="trun"></textarea>
    </div>
    <div class-"fam-group">
        <label for="address">address</label>
        <textarea name="address" class-"form-control" required="trun"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>