<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GistStylin</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Inconsolata:400|Hind:300">
  </head>


  <body>
    <div class="navbar">
      <div class="container cf">
        <h1 class="brand"> Style Your Gists</h1>


        <p class="credit">Created by <a href="http://twitter.com/mektball">@mektball</a>. View the <a href="https://github.com/roachhd/style-your-gist">source</a>.</p>
      </div>
    </div>


    <div class="main loading">
      <div class="container">
        <div class="cf">
          <div class="intro">
            <p>Gist stylin this nasty ghost embeds and easily create your own styles. Customize the settings and copy the CSS for super stylin Gists.</p>
          </div>


       </div>


        <div class="app cf">
          <div class="left-column">
            <h2 class="title title-settings">Settings</h1>


            
              <div class="section">
                <h3 class="section-title">Fonts</h3>


                
                  <label for="ff-code" class="setting-row cf">
                    <span class="setting-label">Code</span>


                    <input type="text"
                      id="ff-code"
                      class="setting-input font"
                      value="Consolas, 'Liberation Mono', Courier, monospace"
                      data-setting-category="fonts"
                      data-setting-object="code" />
                  </label>


                
                  <label for="ff-line-numbers" class="setting-row cf">
                    <span class="setting-label">Line Numbers</span>


                    <input type="text"
                      id="ff-line-numbers"
                      class="setting-input font"
                      value="Consolas, 'Liberation Mono', Courier, monospace"
                      data-setting-category="fonts"
                      data-setting-object="lineNumbers" />
                  </label>


                
                  <label for="ff-meta" class="setting-row cf">
                    <span class="setting-label">Meta</span>


                    <input type="text"
                      id="ff-meta"
                      class="setting-input font"
                      value="'Helvetica Neue', Helvetica, arial, freesans, clean, sans-serif"
                      data-setting-category="fonts"
                      data-setting-object="meta" />
                  </label>


                              </div>


            
              <div class="section">
                <h3 class="section-title">Borders</h3>


                
                  <label for="bdr-main" class="setting-row cf">
                    <span class="setting-label">Main</span>


                    <input type="text"
                      id="bdr-main"
                      class="setting-input color"
                      value="#dddddd"
                      data-setting-category="borders"
                      data-setting-object="main" />
                  </label>


                
                  <label for="bdr-line-numbers-right" class="setting-row cf">
                    <span class="setting-label">Line Numbers (right)</span>


                    <input type="text"
                      id="bdr-line-numbers-right"
                      class="setting-input color"
                      value="#dddddd"
                      data-setting-category="borders"
                      data-setting-object="lineNumbersRight" />
                  </label>


                
                  <label for="bdr-meta-top" class="setting-row cf">
                    <span class="setting-label">Meta (top)</span>


                    <input type="text"
                      id="bdr-meta-top"
                      class="setting-input color"
                      value="#dddddd"
                      data-setting-category="borders"
                      data-setting-object="metaTop" />
                  </label>


                              </div>


            
              <div class="section">
                <h3 class="section-title">Backgrounds</h3>


                
                  <label for="bg-line-numbers" class="setting-row cf">
                    <span class="setting-label">Line Numbers</span>


                    <input type="text"
                      id="bg-line-numbers"
                      class="setting-input color"
                      value="#ececec"
                      data-setting-category="backgrounds"
                      data-setting-object="lineNumbers" />
                  </label>


                
                  <label for="bg-code" class="setting-row cf">
                    <span class="setting-label">Code</span>


                    <input type="text"
                      id="bg-code"
                      class="setting-input color"
                      value="#f8f8ff"
                      data-setting-category="backgrounds"
                      data-setting-object="code" />
                  </label>


                
                  <label for="bg-meta" class="setting-row cf">
                    <span class="setting-label">Meta</span>


                    <input type="text"
                      id="bg-meta"
                      class="setting-input color"
                      value="#e8e8e8"
                      data-setting-category="backgrounds"
                      data-setting-object="meta" />
                  </label>


                              </div>


            
              <div class="section">
                <h3 class="section-title">Colors</h3>


                
                  <label for="clr-line-numbers" class="setting-row cf">
                    <span class="setting-label">Line Numbers</span>


                    <input type="text"
                      id="clr-line-numbers"
                      class="setting-input color"
                      value="#aaaaaa"
                      data-setting-category="colors"
                      data-setting-object="lineNumbers" />
                  </label>


                
                  <label for="clr-meta" class="setting-row cf">
                    <span class="setting-label">Meta</span>


                    <input type="text"
                      id="clr-meta"
                      class="setting-input color"
                      value="#999999"
                      data-setting-category="colors"
                      data-setting-object="meta" />
                  </label>


                
                  <label for="clr-meta-links" class="setting-row cf">
                    <span class="setting-label">Meta Links</span>


                    <input type="text"
                      id="clr-meta-links"
                      class="setting-input color"
                      value="#666666"
                      data-setting-category="colors"
                      data-setting-object="metaLinks" />
                  </label>


                              </div>


            
              <div class="section">
                <h3 class="section-title">Shadows</h3>


                
                  <label for="sdw-line-numbers" class="setting-row cf">
                    <span class="setting-label">Line Numbers</span>


                    <input type="text"
                      id="sdw-line-numbers"
                      class="setting-input text-shadow"
                      value="none"
                      data-setting-category="shadows"
                      data-setting-object="lineNumbers" />
                  </label>


                
                  <label for="sdw-meta" class="setting-row cf">
                    <span class="setting-label">Meta</span>


                    <input type="text"
                      id="sdw-meta"
                      class="setting-input text-shadow"
                      value="1px 1px rgba(255, 255, 255, .8)"
                      data-setting-category="shadows"
                      data-setting-object="meta" />
                  </label>


                              </div>


            
          </div>


          <div class="right-column">
            <h2 class="title title-preview">Preview</h1>
            <script src="https://gist.github.com/roachhd/a46aebf14e52db311eb9.js"></script>


            <h2 class="title title-download">Download</h2>
            <textarea id="download-styles" class="download-styles"></textarea>
          </div>
        </div>
      </div>
    </div>


    <style id="theme-styles"></style>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="assets/js/iris.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>
