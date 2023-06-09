<div class="container short">
  <?php include('views/components/messages.php') ?>
  <div class="page__header">
    <div class="group">
      <span class="group__title">Create Election Record</span>
      <a href="election-manager.php">
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
          <div class="field single">
            <label for="election_name">Election Record Name</label>
            <input id="election_name" type="election_name" class="form-control" name="election_name" required autocomplete="election_name" autofocus>
          </div>
          <div class="group">
            <div class="field">
              <label for="first_name">Election Start Date</label>
              <input id="first_name" type="date" class="form-control" name="first_name" required autocomplete="first_name" autofocus>
            </div>
            <div class="field">
              <label for="last_name">Election End Date</label>
              <input id="last_name" type="date" class="form-control" name="last_name" required autocomplete="last_name">
            </div>
            <div class="field readonly">
              <label for="last_name">Status</label>
              <input id="last_name" type="last_name" class="form-control" name="last_name" required autocomplete="last_name" readonly>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="page__actions">
    <button class="primary wide">Create Election</button>
  </div>
</div>