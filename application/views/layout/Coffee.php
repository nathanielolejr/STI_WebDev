<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>

<section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Hot and Cold</span>
                <span class="section-heading-lower">Coffee</span>
              </h2>
              <p class="mb-0">Provide a good service with a friendly atmosphere that can be a place to dream as you try to escape the daily stresses of our life and have a comfortable place to meet with your friends. With a growing demand for high-quality gourmet coffee, dessert and great service.</p>
              
              <div class="row">
  <div class="column">
    <div class="content">
      <img src="mountains.jpg" alt="Mountains" style="width:100%">
      <h3>My Work</h3>
      <p>Lorem ipsum..</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="lights.jpg" alt="Lights" style="width:100%">
      <h3>My Work</h3>
      <p>Lorem ipsum..</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="nature.jpg" alt="Nature" style="width:100%">
      <h3>My Work</h3>
      <p>Lorem ipsum..</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="mountains.jpg" alt="Mountains" style="width:100%">
      <h3>My Work</h3>
      <p>Lorem ipsum..</p>
    </div>
  </div>
</div>
            </div>
          </div>
        </div>
      </div>
    </section>