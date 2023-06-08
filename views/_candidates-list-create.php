<div class="container short">
  <div class="page__header">
    <div class="group">
      <span class="group__title">Add Candidate</span>
      <a href="candidates-list.php">
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
              <label for="first_name">Student ID</label>
              <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" autofocus>
            </div>
            <div class="field readonly">
              <label for="last_name">Name</label>
              <input id="last_name" type="last_name" class="form-control" name="last_name" required autocomplete="last_name" readonly>
            </div>
          </div>
          <div class="group">
            <div class="field input">
              <label for="student_id">Position</label>
              <select name="position_id">
                <option value="0">Select Position</option>
                <option value="1">President</option>
                <option value="2">Vice President</option>
                <option value="3">Secretary</option>
                <option value="4">Treasurer</option>
                <option value="5">Auditor</option>
                <option value="6">PRO</option>
              </select>
            </div>
            <div class="field input">
              <label for="college">Party Name</label>
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