<div class="container short">
  <div class="page__header">
    <div class="group">
      <span class="group__title">Add Student</span>
      <a href="master-list.php">
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
            <div class="field name">
              <label for="first_name">First Name</label>
              <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" autofocus>
            </div>
            <div class="field name">
              <label for="last_name">Last Name</label>
              <input id="last_name" type="last_name" class="form-control" name="last_name" required autocomplete="last_name">
            </div>
            <div class="field name">
              <label for="middle_initial">M.I.</label>
              <input id="middle_initial" type="middle_initial" class="form-control" name="middle_initial" required autocomplete="middle_initial">
            </div>
          </div>
          <div class="group">
            <div class="field input">
              <label for="student_id">Student ID</label>
              <input id="student_id" type="student_id" class="form-control" name="student_id" required autocomplete="student_id" autofocus>
            </div>
            <div class="field input">
              <label for="college">College</label>
              <input id="college" type="college" class="form-control" name="college" required autocomplete="college">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="page__actions">
    <button class="primary">Add Student</button>
  </div>
</div>