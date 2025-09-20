<?php require '../includes/header.php'; ?>
<body>
    <div id="progress-bar"></div>
    <div class="guide-container container">
        <nav class="guide-nav">
            <h3>Chapters</h3>
            <ul>
                <li><a href="#introduction"> Introduction</a></li>
                <li><a href="#chapter-1">The Setup</a></li>
                <li><a href="#chapter-2">Including Bootstrap</a></li>
                <li><a href="#chapter-3">HTML</a></li>
                <li><a href="#chapter-4">Custom CSS</a></li>
                <li><a href="#conclusion">Conclusion</a></li>
            </ul>
        </nav>

        <main class="guide-content">
            <h1>Personal Website: Bootstrap</h1>
            <p class="author">Damien Dennis</p>

            <section id="introduction">
                <h2>Prerequisites</h2>
                <ul>
                    <li>Integrated Development Environment (IDE)</li>
                    <li>A modern web browser</li>
                </ul>
                <p>Creating a website is a deeply fulfilling experience and a perfect starting point for any development journey. It was one of the first projects I tackled as a developer in college. While HTML provides the essential skeleton for a webpage, it's the styling and interactivity that truly bring it to life. Think of it like an artist's canvas; the structure is just the beginning.</p>
                <p>In this guide, we'll use the powerful Bootstrap framework to transform basic HTML, CSS, and JavaScript into a beautiful, responsive, and professional personal website.</p>
            </section>

            <section id="chapter-1">
                <h2>The Setup</h2>
                <p>To make our life easier, it's best to start with a concrete file structure. Placing every file in your root directory will work, as Bootstrap does not enforce a specific file structure. However, implementing structure in your project will make it easier to maintain in the future and is the professional standard for development.</p>
                <p>With that in mind, let's get to work. Like any great development project, open your command line or terminal and run:</p>
                <pre><code class="language-bash">git init personal-website</code></pre>
                <p>or:</p>
                <pre><code class="language-bash">mkdir personal-website</code></pre>
                <p>This will create a folder in your user directory called <code>personal-website</code>. Change the name if you like. The important distinction between commands here is our usage of Git. It isn't a requirement, but I highly recommend tracking all of your projects with Git. If you want to learn about Git, learn more <a href="Git&Github.php">here.</a></p>
                <p>Navigate to your computer's file manager and open your newly created folder. Create a structure like this:</p>
                <pre><code class="language-plaintext">
personal-website/
├── index.html
├── css/
│   └── custom.css
├── js/  
└── images/
    </code></pre>
    <p><code>Personal-website/</code> is our root directory. It is <strong>imperative</strong> that <code>index.html</code> is named specifically that. Web servers are <strong>universally</strong> configured to look for that file name as an entry point to your site. It is essentially your front door and what will be your landing page.<code>Custom.css</code> is a special CSS file we will use to supplement or override default Bootstrap styles, but we will get to that later.</p>
            </section>

            <section id="chapter-2">
                <h2>Including Bootstrap</h2>
                <p>There are two ways to include Bootstrap in your web development:</p>
                    <ul>
                        <li>Content Delivery Network (CDN)</li>
                        <li>Local Download</li>
                    </ul>
                
                <p>For this guide, we will use the CDN. It's the quickest and most reliable way to get started as it doesn't require any downloads and ensures you're always using a fast, cached version of the library. The only downside is that you need an internet connection during development.</p>
                <p>The local download method is an excellent alternative for those who need to work entirely offline or want complete control over the files.</p>
                <p>You can find the CDN links here on the Bootstrap Docs page under "CDN Links":</p>
                <ul>
                    <li><a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/" target="_blank">Bootstrap CDN links</a></li>
                </ul>
            </section>
            
            <section id="chapter-3">
                <h2>HTML</h2>
                <p>Now that we have found our CDN links, let's set up our HTML file. Open an IDE of your choice (I prefer VS Code) and open your <code>personal-website</code> folder. Open <code>index.html</code>.</p>
                <p>Type the following code into your HTML file:</p>
                <pre><code class="language-html">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;title&gt;My Personal Website&lt;/title&gt;

    &lt;!-- Link to Bootstrap CSS via CDN --&gt;
    &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, world!&lt;/h1&gt;

    &lt;!-- Link to Bootstrap JS via CDN --&gt;
    &lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code></pre>
<p>Now that looks like a lot, so let's unpack this together.</p>
<h3>The Doctype Declaration</h3>
<p>The very first line, <code>&lt;!doctype html&gt;</code>, is the doctype declaration. It tells the browser that this document is an HTML5 document, which is the latest version of HTML. This ensures that the browser renders the page correctly and consistently across different browsers. Without it, the browser may render the page in unpredictable ways.</p>
<h3>The HTML Element</h3>
<p>The <code>&lt;html&gt;</code> element is the root element of an HTML document. It wraps all the content on the entire page and is a container for all other HTML elements. The <code>lang="en"</code> attribute specifies the language of the document, which helps with accessibility and search engine optimization (SEO).</p>
<h3>The Head Section</h3>
<p>The <code>&lt;head&gt;</code> section contains meta-information about the document that isn't displayed directly on the webpage. This includes:</p>
<ul>
    <li><code>&lt;meta charset="utf-8"&gt;</code>: This meta tag sets the character encoding for the document to UTF-8, which supports a wide range of characters from different languages. This is important for ensuring that text displays correctly.</li>
    <li><code>&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</code>: This meta tag is crucial for responsive web design. It sets the viewport to match the device's width and initial zoom level, ensuring that the website looks good on all devices, from desktops to mobile phones.</li>
    <li><code>&lt;title&gt;My Personal Website&lt;/title&gt;</code>: The title tag defines the title of the webpage, which appears in the browser tab and is used by search engines. It's important for SEO and gives users a quick idea of what the page is about.</li>
    <li><code>&lt;link href="..." rel="stylesheet"&gt;</code>: This link tag includes the Bootstrap CDN in the document. The <code>href</code> attribute specifies the path to the CSS file, and the <code>rel="stylesheet"</code> attribute indicates that this link is to a stylesheet. This is how we apply Bootstrap's styles to our webpage.</li>
</ul>
<h3>The Body Section</h3>
    <p>The <code>&lt;body&gt;</code> section contains the content that is displayed on the webpage. What you are currently reading is part of this page's body content.</p>
<ul>
    <li>The <code>&lt;script&gt;</code> section includes the Bootstrap JavaScript file. The <code>src</code> attribute specifies the path to the JS file. This script is responsible for enabling Bootstrap's interactive components, such as modals, dropdowns, and carousels. An important note here, is that it should be put directly above <code>&lt;/body&gt;</code>. We do this so the browser can load and display all the visible page content and styles first, making the website feel much faster for the user.</li>
</ul>
<p>You've probably noticed that most HTML tags come in pairs, like <code>&lt;body&gt;&lt;/body&gt;</code>. The first part, <code>&lt;body&gt;</code>, is the <strong>opening tag</strong>, and the second part with a forward slash, <code>&lt;/body&gt;</code>, is the <strong>closing tag</strong>.</p>
<p>A great way to think about this is like a box with a lid. The opening tag is the box, the closing tag is the lid, and you place your content between them.</p>
<p>However, some tags like <code>&lt;meta&gt;</code> don't have a closing tag. That's because they don't hold any content. They <strong>are</strong> the content. Using our analogy, they aren't a box; they're more like a solid brick. Since they can't contain anything, they don't need a lid. In HTML, these are called <strong>void elements.</strong></p>
<h3>The Grid System: The Actual Content</h3>
<p>If you run this HTML in your browser right now, you'll see "Hello, World!" in bold black lettering in the top left corner of your browser window. That isn't very exciting, so let's change that.</p>
<p>Bootstrap is famous for its pre-styled components like navbars and buttons, but the foundational technology that makes everything possible is Bootstrap's <strong>responsive grid system</strong></p>
<p>To start, go ahead and remove the existing <code>&lt;h1&gt;&lt;/h1&gt;</code> along with the content in between the tags. We are going to use Bootstrap's grid system to create a two-column "About-Me" section and use Bootstrap's JavaScript to create a modal that will allow viewers to get more details about you and download your resume.</p>
<p>Let's put together the basic structure of our webpage using Bootstrap's grid system. Replace the removed <code>&lt;h1&gt;&lt;/h1&gt;</code> tags with the following code:</p>
<pre><code class="language-html">
    &lt;div id="about-section" class="container mt-5"&gt;
      &lt;div class="row align-items-center"&gt;

        &lt;div class="col-md-6"&gt;
          &lt;h2&gt;About Me&lt;/h2&gt;
          &lt;p&gt;Here is a brief summary of my skills and experience.&lt;/p&gt;
          
          &lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#resumeModal"&gt;
            View My Resume
          &lt;/button&gt;
        &lt;/div&gt;

        &lt;div class="col-md-6"&gt;
          &lt;img src="https://via.placeholder.com/400" class="img-fluid rounded profile-image-shadow" alt="A placeholder image"&gt;
        &lt;/div&gt;

      &lt;/div&gt;
    &lt;/div&gt;</code></pre>

<p>Let's break down what each part of this code does:</p>
<ul>
    <li><code>&lt;div class="container mt-5"&gt;</code>: This creates a Bootstrap container that centers your content and adds horizontal padding. The <code>mt-5</code> class adds a top margin to create space above the container.</li>
    <li><code>&lt;div class="row align-items-center"&gt;</code>: This creates a row within the container. The <code>align-items-center</code> class vertically centers the content within the row.</li>
    <li><code>&lt;div class="col-md-6"&gt;</code>: This creates a column that takes up half the width of the row on medium to larger screens (like tablets and desktops). On smaller screens, it will automatically stack vertically. We have two of these columns, one for text and one for an image.</li>
    <li><code>&lt;h2&gt;About Me&lt;/h2&gt;</code>: This is a heading for the "About Me" section.</li>
    <li><code>&lt;p&gt;Here is a brief summary of my skills and experience...&lt;/p&gt;</code>: This paragraph provides a brief introduction about yourself.</li>
    <li><code>&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#resumeModal"&gt;View My Resume&lt;/button&gt;</code>: This button uses Bootstrap's button classes to create a styled button. The <code>data-bs-toggle="modal"</code> and <code>data-bs-target="#resumeModal"</code> attributes are used to trigger a modal when the button is clicked. The modal will display your resume.</li>
    <li><code>&lt;img src="https://via.placeholder.com/400" class="img-fluid rounded" alt="A placeholder image"&gt;</code>: This image tag displays a placeholder image. The <code>img-fluid</code> class makes the image responsive, so it scales with the parent element, and the <code>rounded</code> class adds rounded corners to the image. Replace the <code>src</code> URL with the path to your own image in the "images" folder.</li>
</ul>  

<h3>Other Tags Explained</h3>
                <p>The tags within an HTML file can be divided into three main categories:</p>
                <ul>
                    <li><strong>Semantic</strong>: These tags describe the <em>meaning</em> of their content.
                        <ul>
                            <li><code>&lt;h1&gt; - &lt;h6&gt;</code>: Heading levels.</li>
                            <li><code>&lt;p&gt;</code>: A paragraph of text.</li>
                            <li><code>&lt;a&gt;</code>: A hyperlink.</li>
                            <li><code>&lt;ul&gt;</code>, <code>&lt;ol&gt;</code>, <code>&lt;li&gt;</code>: Tags for creating lists.</li>
                        </ul>
                    </li>
                    <li><strong>Structural</strong>: These tags organize the <em>layout</em> of a page.
                        <ul>
                            <li><code>&lt;div&gt;</code>: A generic container to group elements.</li>
                            <li><code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;nav&gt;</code>: Sections for the top, bottom, and navigation of a page.</li>
                        </ul>
                    </li>
                    <li><strong>Presentational</strong>: These tags define the <em>appearance</em> of content.
                        <ul>
                            <li><code>&lt;strong&gt;</code>: Makes text bold with semantic importance.</li>
                            <li><code>&lt;em&gt;</code>: Makes text italic with semantic emphasis.</li>
                            <li><code>&lt;br&gt;</code>: A line break.</li>
                            <li><code>&lt;img&gt;</code>: Embeds an image.</li>
                        </ul>
                    </li>
                </ul>

<h3>Finishing Up the HTML</h3>
<p>Now that we have the responsive grid in place, your website page should look like this:</p>
<img src="../assets/images/screenshot_1.png" alt="..." class="img-fluid rounded mb-3 guide-screenshot">
<p>Next, we need to add the modal that will display your resume when the button is clicked. Add the following code directly above the JavaScript <code>&lt;script&gt;</code> tag:</p>
<pre><code class="language-html">
    &lt;div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="resumeModalLabel" aria-hidden="true"&gt;
      &lt;div class="modal-dialog"&gt;
        &lt;div class="modal-content"&gt;
          &lt;div class="modal-header"&gt;
            &lt;h1 class="modal-title fs-5" id="resumeModalLabel">Download Resume&lt;/h1&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"&gt;&lt;/button&gt;
          &lt;/div&gt;
          &lt;div class="modal-body"&gt;
            &lt;p&gt;Click the button below to download a PDF copy of my resume.&lt;/p&gt;
            &lt;a href="path/to/your/resume.pdf" class="btn btn-primary" download&gt;
              Download as PDF
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;div class="modal-footer"&gt;
            &lt;button type="button" class="btn btn-secondary" data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;</code></pre>

<p>At this point, we have a good understanding of basic HTML tags (div, a, h1, etc). But you may be confused by the structure of this modal element. Let me explain.</p>
<p>Think of a modal as a picture frame, and the rest of your HTML is the wall.</p>
<ul>
  <li>The outermost <code>&lt;div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="resumeModalLabel" aria-hidden="true"&gt;</code> is the frame itself. It defines the modal and includes attributes that control its behavior, such as fading in and out.</li>
  <li>The next <code>&lt;div class="modal-dialog"&gt;</code> is like the matting inside the frame. It positions the modal content in the center of the screen and provides some spacing around it.</li>
  <li>The <code>&lt;div class="modal-content"&gt;</code> is the actual picture inside the frame. This is where all the content of the modal goes, including the header, body, and footer.</li>
  <li>The <code>&lt;div class="modal-header"&gt;</code> is the top section of the modal. It contains the title and a close button.</li>
  <li>The <code>&lt;div class="modal-body"&gt;</code> is the main content area of the modal. This is where you put information you want to display, such as text or images. In this case, it includes a paragraph and a download button for your resume.</li>
  <li>The <code>&lt;div class="modal-footer"&gt;</code> is the bottom section of the modal. It typically contains action buttons, such as a close button or other options related to the modal's content.</li>
</ul>
<p>With this structure, when the "View My Resume" button is clicked, the modal will appear on top of the current page, allowing users to download your resume without navigating away from the page.</p>
<p>Make sure to replace <code>path/to/your/resume.pdf</code> with the actual path to your resume file. If you place your resume in the root directory, you can simply use <code>resume.pdf</code>.</p>

            </section>
            <section id="chapter-4">
                <h2>Custom CSS</h2>
                <p>Bootstrap provides a solid foundation for responsive design. This HTML foundation we have built will work seamlessly across all device sizes and browser types. However, it has a very distinct "Bootstrap" look. To make your website truly your own, you can add custom CSS to override or supplement Bootstrap's default styles.</p>
                <p>Before we start working on our custom CSS, the first task we need to complete is linking the <code>custom.css</code> to the <code>index.html</code> file. In your <code>&lt;head&gt;</code> section, directly below your Bootstrap CSS link, add this line of HTML:</p>
                <pre><code class="language-html">
                  &lt;link href="css/custom.css" rel="stylesheet"&gt;
                </code></pre>   
                
                <p>CSS is notoriously easy to grasp, but difficult to master.</p>
                <p>Basic CSS syntax like this:</p>
                <pre><code class="language-css">
selector {
  property: value;
  border-color: value;
}
</code></pre>
<ul>
<li>This entire snippet is called a <b>CSS rule</b>.In a simple sense, CSS is just a long list of rules.</li>
<li>The <b>selector</b> is the HTML element you want to style. It can be a tag name (like <code>body</code>), a class (like <code>.btn</code>), or an ID (like <code>#header</code>).</li>
<li>The <b>property</b> is the aspect of the element you want to change, such as color, font-size, margin, padding, etc.</li>
<li>The <b>value</b> is what you want to set the property to, such as a specific color, size, or measurement.</li>
<li>Each property-value pair is separated by a semicolon (<code>;</code>), and all of the property/value combinations are enclosed in curly braces (<code>{}</code>).</li>
</ul>

<p>The first and possibly the most important system to understand in order to truly master CSS is called <b>Specificity</b>. As your CSS grows in complexity, you will tend to run into conflicts.</p>
<p>For example, if you have two rules that apply to the same element, the one with higher specificity will take precedence. Specificity is calculated based on the types of selectors used in the rule.</p>
<p>With rule specificity in mind, let's add our custom CSS:</p>
<pre><code class="language-css">
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

body {
  font-family: 'Roboto', sans-serif;
}

/* This rule styles all primary buttons to be green */
.btn.btn-primary {
  --bs-btn-bg: #198754;
  --bs-btn-border-color: #198754;
  --bs-btn-hover-bg: #157347;
  --bs-btn-hover-border-color: #146c43;
}

/* This rule creates a custom shadow and hover effect for our image */
#about-section .profile-image-shadow {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease-in-out;
}

#about-section .profile-image-shadow:hover {
  transform: scale(1.03);
}
</code></pre>
<p>In this CSS, we're accomplishing two main goals, First, we are customizing a default Bootstrap component. The recommended way to change the color of a Bootstrap button is to override its CSS variables. By setting <code>--bs-btn-bg</code> and the other <code>--bs-btn-*</code> variables, we can change the button's appearance in a way the framework intended, ensuring all states like hover and active work correctly with our new color.</p>
<p>Second, we're creating a completely new custom effect. While Bootstrap has basic shadow classes like <code>.shadow</code>, you might want more control. By creating our own class (<code>.profile-image-shadow</code>), we can define a unique <code>box-shadow</code> and a special hover effect. We use the parent ID (<code>#about-section</code>) in the selector to make our rule highly specific, ensuring it applies exactly where we want without conflicting with other styles.</p>
<p>Finally, an important note regarding selectors:</p>
<ul>
<li>Class selectors use a period (<code>.</code>) before the class name, like <code>.btn</code>.</li>
<li>ID selectors use a hash (<code>#</code>) before the ID name, like <code>#about-section</code>.</li>
</ul>
<p>Notice there are profile image rules that will add some flair to whatever image you decide to link to your webpage. You wont see these changes until an image is added. This is accomplished similarly to how we linked a resume to our HTML.</p>
<ol>
  <li>Place your image in the "images" folder you created earlier.</li>
  <li>Replace the <code>src</code> attribute in the <code>&lt;img&gt;</code> tag with the path to your image, like <code>images/your-image.jpg</code>.</li>
</ol>
<p>With these changes, your custom styles should now be applied correctly, giving your website a unique look while still leveraging the power of Bootstrap.</p>

<h3>Troubleshooting: What if my styles don't apply?</h3>
                <p>If you test your page and your custom styles aren't showing up, it's usually for one of two reasons:</p>
                <ol>
                    <li><strong>The stylesheet isn't linked correctly.</strong> Make sure you have added <code>&lt;link href="css/custom.css" rel="stylesheet"&gt;</code> to your HTML file's <code>&lt;head&gt;</code>, and that it comes <b>after</b> the Bootstrap CSS link.</li>
                    <li><strong>Bootstrap's rules are more specific.</strong> CSS rules are applied based on specificity. To ensure your rule wins, you can make your selector more specific. That's why we added an <code>id="about-section"</code> to our HTML and used it in our CSS selectors (e.g., <code>#about-section .btn.btn-primary</code>). An ID gives your selector higher priority.</li>
                </ol>

<section id="conclusion">
                <h2>Conclusion</h2>
                <p>Congratulations! You've successfully built a simple, responsive, and customized webpage using Bootstrap.</p>
                <p>Let's recap what we have learned:</p>
                <ul>
                  <li><b>How to Structure a Web Project</b>: Set up a clean and professional folder structure for your HTML, CSS, and other assets.</li>
                  <li><b>How to Include the Bootstrap Framework</b>:Integrate Bootstrap into a project using the fast and reliable CDN method.</li>
                  <li><b>How to Build a Responsive Layout</b>: Use Bootstrap's foundational Grid System  to create a layout that automatically adapts to desktops, tablets, and mobile devices.</li>
                  <li><b>How to Implement Bootstrap Components</b>: Add pre-styled components like buttons and use Bootstrap's JavaScript to power interactive elements like a pop-up modal.</li>
                  <li><b>How to Customize with Custom CSS</b>: Link your own stylesheet to override Bootstrap's default styles, allowing you to apply a personal flair with custom colors, fonts, and effects.</li>
                  <li><b>Understanding of Core Web Concepts</b>: Grasp the fundamental roles of HTML for creating structure and CSS for applying styles, and learn how to make them work together.</li>
                </ul>
                <p>Bootstrap is a massive framework, and we've only scratched the surface. The skills you've learned here are the foundation for building much larger and more complex websites. Keep experimenting, and be sure to use the official Bootstrap documentation as your guide.</p>
            </section>
        </main>
    </div>

     <script src="../assets/js/guide-nav.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-bash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-css.min.js"></script>
<script>document.querySelectorAll('.guide-content pre').forEach(pre => {
    const button = document.createElement('button');
    button.className = 'copy-btn';
    button.innerText = 'Copy';

    button.addEventListener('click', () => {
        const code = pre.querySelector('code').innerText;
        navigator.clipboard.writeText(code).then(() => {
            button.innerText = 'Copied!';
            setTimeout(() => {
                button.innerText = 'Copy';
            }, 2000);
        });
    });

    pre.appendChild(button);
});</script>

<script>const progressBar = document.getElementById('progress-bar');
const body = document.body;
const html = document.documentElement;

window.addEventListener('scroll', () => {
    const scrollTotal = html.scrollHeight - html.clientHeight;
    const scrollPosition = window.scrollY;
    const scrollPercentage = (scrollPosition / scrollTotal) * 100;

    progressBar.style.width = scrollPercentage + '%';
});</script>

<script src='https://storage.ko-fi.com/cdn/scripts/overlay-widget.js'></script>
<script>
  kofiWidgetOverlay.draw('tunnelcraftbydamien', {
    'type': 'floating-chat',
    'floating-chat.donateButton.text': 'Support me',
    'floating-chat.donateButton.background-color': '#222222',
    'floating-chat.donateButton.text-color': '#fff'
  });
</script>

</body>
</html>