<div class="container short">
  <div class="page__header">
    <div class="group">
      <span class="group__title">Edit Position</span>
      <a href="positions-list.php">
        <button class="primary bold">
          <i class="fa-solid fa-arrow-left-long"></i>
          Go Back
        </button>
      </a>
    </div>
    <span class="description">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet...</span>
  </div>
  <div class="content">
    <div class="content__row">
      <form class="modify" action="" method="">
        <span class="title">BASIC INFORMATION</span>
        <div class="fields">
          <div class="group">
            <div class="field">
              <label for="name">Position Name</label>
              <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
            </div>
            <div class="field">
              <label for="candidate_elect_num">Number of Candidates to be Elected</label>
              <input id="candidate_elect_num" type="text" class="form-control" name="candidate_elect_num" required autocomplete="candidate_elect_num">
            </div>
          </div>
          <div class="field single">
            <label for="colleges">Colleges</label>
            <input id="colleges" type="text" class="form-control" name="colleges" required autocomplete="colleges">
          </div>
          <div class="field input">
            <label for="college">Description</label>
            <textarea id="college" type="text" class="form-control" name="college" required autocomplete="college"></textarea>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="page__actions">
    <button class="primary wide">Update Position</button>
  </div>
</div>