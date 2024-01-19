<label>Entrer Votre email</label>
<input type="email" name="mail">
@error('mail')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<br>
<br>
<label>Entrer Votre enchère en chf</label>
<input type="number" name="bid">
@error('bid')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
