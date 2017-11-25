<form class="forma">
  <div class="form-group">
    <label for="InputEmail">Email address</label>
    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="InputPhrase">Secret phrase</label>
    <select id="InputPhrase" class="form-control">
      <option selected disabled style="display: none">choose...</option>  
      <option value="cat">my cat name</option>
      <option value="birth">my birthday</option>
    </select>
  </div>

  <div class="form-group">
    <label for="InputAnswer">Answer</label>
    <input type="text" class="form-control" id="InputAnswer" placeholder="Answer" name="answer">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>