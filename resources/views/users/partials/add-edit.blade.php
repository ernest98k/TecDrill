@can("updateRole",$user)
<div class="form-group">
    <label for="inputFullname">Nome</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value="{{old('name',$user->name)}}" />
</div>

<div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="{{old('email',$user->email)}}" />
</div>

<div class="form-group">
    <label for="inputRole">Role</label>
    <select name="role" id="inputRole" class="form-control">
        <option  {{old('role',$user->role)=='A'?"selected":""}} value="A">Admin</option>
        <option  {{old('role',$user->role)=='N'?"selected":""}} value="N">Normal</option>
    </select>
</div>
@endcan
