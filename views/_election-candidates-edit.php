<div class="container short">
  <?php include('views/components/messages/info/info.php') ?>
  <div class="page__header">
    <div class="group">
      <span class="group__title">Override Candidate Result</span>
      <a href="election-candidates.php">
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
        <span class="title">OVERRIDE DETAILS</span>
        <div class="fields">
          <div class="field input">
            <label for="reason">Reason</label>
            <textarea id="reason" type="text" name="reason" required autocomplete="reason" autofocus></textarea>
          </div>
          <div class="field half">
            <label for="result">Result</label>
            <input id="result" type="text" name="result" required autocomplete="result">
          </div>
        </div>
        <div class="page__actions">
          <button type="submit" class="tertiary wide">Override Candidate</button>
        </div>
      </form>
    </div>
  </div>
</div>