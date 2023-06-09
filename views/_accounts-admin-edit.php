<div class="container short">
  <?php include('views/components/messages.php') ?>
  <div class="page__header">
    <div class="group">
      <span class="group__title">Edit Account</span>
      <a href="accounts-admin.php">
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
            <div class="field readonly">
              <label for="first_name">Student ID</label>
              <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" autofocus readonly>
            </div>
            <div class="field input">
              <label for="last_name">Password</label>
              <input id="last_name" type="last_name" class="form-control" name="last_name" required autocomplete="last_name">
            </div>
          </div>
          <div class="group">
            <div class="field input">
              <label for="student_id">Username</label>
              <input id="student_id" type="student_id" class="form-control" name="student_id" required autocomplete="student_id">
            </div>
            <div class="field short">
              <label for="student_id">User Role</label>
              <select name="position_id">
                <option value="0">Select Role</option>
                <option value="1">Super Admin</option>
                <option value="2">Admin</option>
                <option value="3">Student Accounts Manager</option>
                <option value="4">Commissioner</option>
                <option value="5">Poll Workers</option>
              </select>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="page__actions">
    <button class="primary wide">Update Account</button>
  </div>
</div>