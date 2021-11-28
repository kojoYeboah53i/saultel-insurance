<!DOCTYPE html>
<html>

  <head>
    <title>Bootstrap 4 Holygrail Layout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>

  <style type="text/css">
      html {
          height: 100%;
      }
      .holygrail {
          height: 100%;
          display: flex;
          flex-direction: column;
      }
      .holygrail-body {
          flex: 1 0 auto;
          display: flex;
          flex-direction: column;
      }
      @media screen and (min-width: 768px) { /* @include media-breakpoint-up(lg) */
          .holygrail-body {
              flex-direction: row;
          }
          .holygrail-main {
              flex: 1;
          }      
          .holygrail-nav, .holygrail-aside {
              flex: 0 0 auto;
          }
      }
  
      /* Other styles */
      .block {
          padding: 3rem 0;
      }
      .text-inverse {
          color: white;
      }
  </style>

  <body class="holygrail">

    <header class="bg-inverse text-white text-center py-4">
        <h3>Header</h3>
    </header>

    <div class="holygrail-body no-gutters">

        <!-- Nav -->
        <nav class="holygrail-nav col-lg-2 col-xxl-1 bg-inverse">

            <section class="text-center bg-danger">
                <h2>Nav</h2>
                <p class="lead">Here is where you put navigation or filters</p>
            </section>

            <div class="block bg-success text-inverse">
                <div class="container-fluid">
                    <section>
                        <h2>Fluid</h2>
                        <p class="lead mb-0">This element bleeds all the way out.</p>
                    </section>
                </div>
            </div>

            <div class="block py-0">
                <div class="container-fluid mx-3 py-5 bg-info text-inverse">
                    <section>
                        <h2>Padded</h2>
                        <p class="lead mb-0">This element has paddings.</p>
                       
                    </section>
                </div>
            </div>

            <div class="block bg-success text-inverse">
                <div class="container-fluid">
                    <section>
                        <h2>Fluid</h2>
                        <p class="lead mb-0">This element bleeds all the way out.</p>
                    </section>
                </div>
            </div>
        </nav>

        <!-- Main -->
        <main class="holygrail-main col-lg-7 col-xxl-9">
            <section class="text-center bg-warning">
                <h2>Main content</h2>
                <p class="lead">Here is where you put your main content.</p>
            </section>

            <div class="block">
                <div class="container-fluid">
                    <section class="mb-4">
                        <h1>A Holygrail Layout for Bootstrap 4</h2>
                        <p class="lead">Resolved Philip Walton's Holygrail layout with Bootstrap 4 flexbox to achieve a more flexible layout template that consists of <code>nav</code>, <code>main</code> and <code>aside</code> parts</p>
                    </section>

                    <h5>Benefits</h5>
                    <ul>
                        <li>Content + sidebars are fluid and their widths are defined by Bootstrap 4's grid system.</li>
                        <li>All columns are the same height, regardless of which column is actually the tallest.</li>
                        <li>Footer always sits at the bottom of the page, even when content is sparse.</li>
                        <li>With the use of <code>.no-gutters</code>, content and sidebars are able to manage bleeds more effectively.</li>
                        <li>No uneven breaking of background colors.</li>
                    </ul>
                </div>
            </div>

            <div class="block">
              <div class="container-fluid">
                <h5>References</h5>
                    <ul>
                        <li><a href="https://philipwalton.github.io/solved-by-flexbox/demos/holy-grail/">Philip Walton: Holy Grail Layout Solved By Flexbox</a></li>
                        <li><a href="https://v4-alpha.getbootstrap.com/layout/overview/">Bootstrap 4 Docs: Layout</a></li>
                    </ul>
              </div>
            </div>

        </main>

        <!-- Aside -->
        <aside class="holygrail-aside col-lg-3 col-xxl-2 bg-inverse">
            
            <section class="text-center bg-danger">
                <h2>Aside</h2>
                <p class="lead">Here is where you put useful information or ads</p>
            </section>

            <div class="block bg-success text-inverse">
                <div class="container-fluid">
                    <section>
                        <h2>Fluid</h2>
                        <p class="lead mb-0">This element bleeds all the way out.</p>
                    </section>
                </div>
            </div>

            <div class="block py-0">
                <div class="container-fluid mx-3 py-5 bg-info text-inverse">
                    <section>
                        <h2>Padded</h2>
                        <p class="lead mb-0">This element has paddings.</p>
                    </section>
                </div>
            </div>

            <div class="block bg-success text-inverse">
                <div class="container-fluid">
                    
                    <section>
                          <h2>Fluid</h2>
                          <p class="lead">This element bleeds all the way out and demonstrates a grid.</p>
                    </section>

                    <div class="row">
                        <div class="col-6 py-3 bg-info">
                            <div class="row">
                                <div class="col-6 py-3 bg-success">
                                    <h5 class>Hello</h5>
                                </div>
                                <div class="col-6 py-3 bg-danger">
                                    <h5 class>Bye</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 py-3 bg-warning">
                            <h5>Bye</h5>
                        </div>
                    </div>

                </div>
            </div>

        </aside>

    </div>

    <footer class="bg-danger text-inverse text-center py-4">
        <h3>Footer</h3>
    </footer>

  </body>

</html>