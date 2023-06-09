<div class="container short">
  <?php include('views/components/messages.php') ?>
  <div class="page__header">
    <div class="group">
      <span class="group__title">Add Position</span>
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
              <label for="first_name">Position Name</label>
              <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" autofocus>
            </div>
            <div class="field">
              <label for="last_name">Number of Candidates to be Elected</label>
              <input id="last_name" type="last_name" class="form-control" name="last_name" required autocomplete="last_name">
            </div>
          </div>
          <div class="group">
            <div class="field input">
              <label for="student_id">All Colleges</label>
              <input id="student_id" type="checkbox" class="form-control" name="student_id" required autocomplete="student_id">
            </div>
            <div class="field input">
              <label for="college">College</label>
              <input id="college" type="college" class="form-control" name="college" required autocomplete="college">
            </div>
          </div>
          <div class="field input">
            <label for="college">Description</label>
            <textarea id="college" type="college" class="form-control" name="college" required autocomplete="college"></textarea>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="page__actions">
    <button class="primary wide">Add Position</button>
  </div>
</div>