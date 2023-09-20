<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <title>Login / Sign Up Form - VITMart</title>
    <link rel="stylesheet" href="./sell.css" />
    <style>
      /* Add flexbox styles */
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }

      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }

      .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
      }

      .form__title {
        font-size: 24px;
        margin-bottom: 20px;
      }

      .form__input-group {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin-bottom: 10px;
      }

      .form__input {
        width: 100%;
        padding: 10px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }

      .form__input-error-message {
        color: red;
      }
    </style>
  </head>
  <body>
    <div class="container" id="container">
      <form class="form" id="sell">
        <h1 class="form__title">Sell</h1>
        <div class="form__input-group">
          <input
            type="text"
            id="Product Name"
            class="form__input"
            autofocus
            placeholder="Product Name"
          />
          <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
          <input
            type="date"
            id="date"
            class="form__input"
            autofocus
            placeholder="Date of purchase"
          />
          <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
          <input
            type="number"
            id="sp"
            class="form__input"
            autofocus
            placeholder="Selling price"
          />
          <div class="form__input-error-message"></div>
        </div>
        <button class="form__button" type="submit">Continue</button>

      </form>
    </div>
  </body>
</html>
