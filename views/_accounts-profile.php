<div class="container short">
  <?php include('views/components/messages.php') ?>
  <div class="page__header">
    <div class="group">
      <span class="group__title">Administrator's Account</span>
      <span class="group__description">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet...</span>
    </div>
    <div class="tab">
      <a href="accounts-profile.php">
        <span class="selector active">My Profile</span>
      </a>
      <a href="accounts-admin.php">
        <span class="selector">Accounts</span>
      </a>
    </div>
  </div>
  <div class="content">
    <div class="content__row">
      <form class="modify" action="" method="">
        <span class="title">MY PROFILE</span>
        <span class="introduction">Hello, John Doe!</span>
        <div class="fields">
          <div class="group">
            <div class="field input">
              <label for="first_name">Student ID</label>
              <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" autofocus>
            </div>
            <div class="field input">
              <label for="last_name">Name</label>
              <input id="last_name" type="last_name" class="form-control" name="last_name" required autocomplete="last_name" readonly>
            </div>
          </div>
          <div class="field button">
            <button class="primary wide" type="submit">Save Changes</button>
          </div>
        </div>
      </form>
    </div>
    <div class="content__row">
      <form class="modify" action="" method="">
        <span class="title">CHANGE YOUR PASSWORD</span>
        <div class="fields">
          <div class="group">
            <div class="field input">
              <label for="first_name">New Password</label>
              <input id="first_name" type="password" class="form-control" name="first_name" required autocomplete="first_name" autofocus>
            </div>
            <div class="field input">
              <label for="last_name">Re-enter Password</label>
              <input id="last_name" type="password" class="form-control" name="last_name" required autocomplete="last_name" readonly>
            </div>
          </div>
          <div class="field button">
            <button class="primary wide" type="submit">Confirm</button>
          </div>
        </div>
      </form>
    </div>
    <div class="content__row">
      <form class="modify" action="" method="">
        <span class="title">SETTINGS</span>
        <div class="fields">
          <div class="group">
            <div class="field text-gray">
            <label for="first_name">Would you like to delete your account?</label>
            </div>
            <div class="field button">
            <button class="primary wide" type="submit">Delete Account</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>