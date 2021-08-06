<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
  color: #00171F;
  font-family: Lato, sans-serif;
  background-color: #f6f6f6;
}

a {
  color: #007EA7;
  text-decoration: none;
}

p {
  color: #444;
  font-size: 14px;
  line-height: 20px;
}

h1 {
  padding-bottom: 10px;
  margin-top: 0;
  font-size: 42px;
  letter-spacing: 1px;
  border-bottom: 1px solid #ddd;
  cursor: default;
}

h2 {
  color: #003459;
  margin-bottom: 10px;
}

table {
  margin-top: 20px;
  width: 100%;
  color: #29516d;
  font-size: 14px;
  border-spacing: 0;
  
  th,
  td {
    padding: 10px;
  }
  
  thead th {
    text-align: left;
    border-bottom: 1px solid #ddd;    
  }
  
  tbody tr:nth-of-type(odd) {
    background-color: #f6f6f6;
  }
  
  tbody tr:hover {
    background-color: #ecf7ff;
  }
}

.btn {
  padding: 10px;
  margin: 0 5px;
  border: 0;
  color: white;
  background-color: #00A8E8;
  
  &:first-child {
    margin-left: 0;
  }
}

.btn-delete {
  background-color: #d90000;
}

/**
  Container
*/
.app-container {
  display: flex;
  flex-flow: row wrap;
  height: 100vh;
}


/**
  Navigation
*/
.nav {
  flex: 1;
  max-width: 180px;
  background-color: #007EA7;
  -webkit-font-smoothing: antialiased;
}

.nav__logo {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;
  color: #ccc;
  font-size: 24px;
  letter-spacing: 1px;
  background-color: #00171F;
  cursor: default;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 1);
  cursor: pointer;
}

.nav__list {
  margin: 40px 0 0;
  padding: 0;
  list-style: none;
}

.nav__list-item {
  position: relative;
}

.nav__list-item--active {
  padding: 10px 0 10px 15px;
  
  .nav__item-link {
    padding: 15px 15px;
    color: #1a1a1a;
    font-weight: 700;
    background-color: #FFFBFC;
    // border-top-left-radius: 8px;
    // border-bottom-left-radius: 8px;
  }
}

.nav__item-link {
  display: block;
  padding: 10px 30px;
  color: #eee;
}

/**
  App View
*/
.app-view {
  display: flex;
  flex: 1;
  flex-direction: column;
}

/**
  Utility Bar
*/
.utility-bar {
  height: 50px;
  font-size: 13px;
  font-weight: 300;
  background-color: #002a38;
}

.utility-bar__inner {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 10px;
  height: 100%;
}

.utility-bar__list {
  display: flex;
  margin: 0;
  padding: 0;
  list-style: none;
}

.utility-bar__list-item {
  
}

.utility-bar__item-link {
  display: flex;
  justify-content: center;
  width: 40px;
  height: 50px;
  
  svg,
  svg path {
    fill: #007EA7 !important;
    transition: fill 200ms ease-out;    
  }
  
  &:hover {
    svg,
    svg path {
      fill: #00A8E8 !important;
    }
  }
}

.utility-bar__indicator {
  position: relative;
  left: -7px;  
  top: 9px;
  width: 14px;
  height: 14px;
  color: white;
  font-size: 10px;
  text-align: center;
  background-color: #d90000;
  border-radius: 100%;
}

.utility-bar__account {
  display: flex;
  align-items: center;
  padding: 10px;
  
  &:hover {
    .utility-bar__account-name {
      color: #eee;
    }
  }
}

.utility-bar__account-avatar {
  display: inline-block;
  margin-right: 10px;  
  width: 32px;
  height: 32px;
  background-color: #666;
  background-image: url('http://keenanstaffieri.com/wp-content/uploads/2014/07/keenan_avatar2.jpg');
  background-size: 100%;
  border-radius: 100%;
}

.utility-bar__account-name {
  color: #00A8E8;
  transition: color 200ms ease-out;
}  

/**
  Content
*/
.content {
  flex: 1;
  padding: 30px;
  background-color: #FFFBFC;
  -webkit-font-smoothing: antialiased;  
}

    </style>

<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

<div class="app-container">
  
  <nav class="nav">
    <a href="#" class="nav__logo">
      LOGO PLZ
    </a>
    <ul class="nav__list">
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Dashboard</a>
      </li>
      <li class="nav_list-item nav_list-item--active">
        <a href="#" class="nav__item-link">Contacts</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Counter</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Locations</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Contracts</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Statuses</a>
      </li>
      <li class="nav__list-item">
        <a href="#" class="nav__item-link">Logout</a>
      </li>
    </ul>
  </nav>
  
  <div class="app-view">
    
    <nav class="utility-bar">
      <div class="utility-bar__inner">
        <ul class="utility-bar__list">
          <li class="utility-bar__list-item">
            <a href="#" class="utility-bar__item-link">
<!-- by Arthur Shlain https://thenounproject.com/search/?q=mail&i=396565               -->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.2" baseProfile="tiny" x="0px" y="0px" viewBox="0 0 100 100" width="26px" xml:space="preserve"><path fill="#999" d="M10,66h16v24l24-24h40V10H10V66z M26,26h48v8H26V26z M26,42h48v8H26V42z"/></svg>
<!--               Messages -->
            </a>
          </li>
          <li class="utility-bar__list-item">
            <a href="#" class="utility-bar__item-link">
<!-- by Nick Novell https://thenounproject.com/search/?q=notification&i=430200               -->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" fill="#999" width="20px" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 0.276083 0.32331250000000004" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs>
</defs><g><path class="fil0" d="M0.185915 0.247296c-0.00283406,0.024408 -0.0235765,0.0433539 -0.0487436,0.0433539 -0.0251671,0 -0.0459057,-0.0189459 -0.0487436,-0.0433539l0.0974872 0zm-0.11863 -0.198392c0.015799,-0.0138347 0.0311442,-0.0218257 0.0461308,-0.0250946 6.4844e-005,-0.0131595 0.0107527,-0.0238092 0.0239312,-0.0238092 0.0130794,0 0.0237062,0.0104933 0.0239236,0.0235193 0.0154252,0.00307055 0.0312395,0.0111227 0.047523,0.0253845 0.0264907,0.0291493 0.0340927,0.0621854 0.0291378,0.0978076 -0.00316973,0.076226 0.0178474,0.055453 0.0381511,0.0874021 -0.0460163,0 -0.0920289,0 -0.138041,0 -0.0460163,0 -0.0920289,0 -0.138041,0 0.0203038,-0.031949 0.0413171,-0.0111761 0.0381511,-0.0874021 -0.00495866,-0.0356222 0.00264335,-0.0686583 0.029134,-0.0978076z"/></g></svg>
<!--               Alerts -->
              <span class="utility-bar__indicator">3</span>
            </a>
          </li>
        </ul>
        <a href="#" class="utility-bar__account">
          <span class="utility-bar__account-avatar"></span>
          <span class="utility-bar__account-name">Keenan Staffieri</span>
        </a>
      </div>
    </nav>
    
    <main class="content">
      <h1>Contacts</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, perspiciatis!</p>
      <h2>Subheading</h2>      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae maiores hic, magnam deserunt ex voluptatum, ducimus consectetur et aut nobis quod maxime odit itaque natus ipsam quisquam quo inventore laudantium.</p>      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptates fuga debitis explicabo voluptatum deleniti?</p>      
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a href="#">Keenan Staffieri</a>
            </td>
            <td>keenan@example.com</td>
            <td>555 ABC St.</td>
            <td>San Diego</td>
            <td>CA</td>
            <td>55555</td>
            <td>
              <button class="btn">Edit</button>
              <button class="btn btn-delete">Delete</button>
            </td>
          </tr>
          <tr>
            <td>
              <a href="#">Sean Staffieri</a>
            </td>
            <td>sean@example.com</td>
            <td>555 XYZ Ave.</td>
            <td>Los Angeles</td>
            <td>CA</td>
            <td>55555</td>
            <td>
              <button class="btn">Edit</button>
              <button class="btn btn-delete">Delete</button>
            </td>
          </tr>
          <tr>
            <td>
              <a href="#">Ziggy Staffieri</a>
            </td>
            <td>ziggy@example.com</td>
            <td>555 Yoyo Ave.</td>
            <td>Austin</td>
            <td>TX</td>
            <td>55555</td>
            <td>
              <button class="btn">Edit</button>
              <button class="btn btn-delete">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
    
  </div>
  
</div>
</body>
</html>