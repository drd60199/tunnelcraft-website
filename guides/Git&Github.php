<?php require '../includes/header.php'; ?>
<body>
    <div id="progress-bar"></div>
    <div class="guide-container container">
        <nav class="guide-nav">
            <h3>Chapters</h3>
            <ul>
                <li><a href="#introduction">Prerequisites</a></li>
                <li><a href="#chapter-1">Getting Started: Git</a></li>
                <li><a href="#chapter-2">Getting Started: GitHub</a></li>
                <li><a href="#chapter-3">Putting it all Together</a></li>
                <li><a href="#chapter-4">Working with an Existing Repo</a></li>
                <li><a href="#chapter-5">Tying the Bow</a></li>
                <li><a href="#conclusion">Conclusion</a></li>
            </ul>
        </nav>

        <main class="guide-content">
            <h1>Git & Github</h1>
            <h2>Understanding the Fundamentals</h2>
            <p class="author">Author: Damien Dennis</p>

            <section id="introduction">
                <h2>Prerequisites</h2>
                <ul>
                    <li>Basic understanding of command line interface (CLI)</li>
                </ul>
                <p>When working by yourself, Git and GitHub are <i>technically</i> not requirements to getting into code. You could very easily create programs and save them to your machine without any issues. However, when you begin working on complex programs, Git will very quickly become a requirement. For this reason, it is incredibly important to learn very early on.</p>
            </section>

            <section id="chapter-1">
                <h2>Getting Started: Git</h2>
                <p>Mac as well as some distributions of Linux will typically come pre-installed with Git. Windows does not. In any case, to check if we have Git installed, navigate to your command or terminal interface and we will run:</p>
                <pre><code class="language-bash">git --version</code></pre>
                <p>If no version information is displayed, you will need to install Git, Which can be downloaded <a href="https://git-scm.com/download/win">here (Windows)</a>.
                If you are running Linux, you can install Git via your package manager. For example, on Debian-based distributions, you can run:</p>
                <pre><code class="language-bash">sudo apt install git-all</code></pre>
                <p>Now if you run your version command again and a Git version is displayed, Great job! You now have Git installed. The very first thing you should do after this is update your git config to include your user name and email. This is important for two key reasons:</p>
                 <ul>
                    <li>Who made the change.</li>
                    <li>Linking to your Github profile</li>
                 </ul>
                 <p>Every commit you make will be stamped with your configured name and email. It's like putting a signature on your own artwork and the signature is the only way to know who authored a specific change in the project's history. Additionally, adding this information will allow platforms like Github to link your work back to your profile. If a username and a verified email are not configured, your work will not be associated with you and will not count toward your contribution graph. To update this information we will run:</p>
           <pre><code class="language-bash">git config --global user.name "Your Name"</code></pre>
                 <p>and</p>
            <pre><code class="language-bash">git config --global user.email "Youremail@example.com"</code></pre>
                 <p>Make sure to replace "Your Name" and "Youremail@example.com" with your actual name and email address. The --global flag means that this information will be used for every repository on your machine.</p>
                </section>

            <section id="chapter-2">
                <h2>Getting Started: Github</h2>
                <p>We have established that Git is essentially a "save" system for your projects. Github is a website that stores your Git projects online. It's like a cloud drive for your code. This makes it easy to keep a backup of your work and collaborate with other developers. You can sign up for a free account at <a href="https://github.com" target="_blank">Github.com</a>.</p>
                <p>Once you have an account, you can create a new repository (repo) on Github. A repo is essentially a folder for your project. You can create a new repo by clicking the "New" button on your Github dashboard under the "repositories" tab. Give your repo a name and description, and choose whether you want it to be public or private. A public repo is visible to anyone, while a private repo is only visible to you and people you invite.</p>
                <p>After creating your repo, you will be taken to the repo's page. Here, you will see a URL that you can use to clone the repo to your local machine. Cloning a repo means creating a copy of it on your machine so you can work on it locally. To clone the repo, open your command or terminal interface and navigate to the directory where you want to store the repo. Then run:</p>
                <pre><code class="language-bash">git clone https://github.com/your-username/your-repo.git</code></pre>
                <p>Make sure to replace "your-username" and "your-repo" with your actual Github username and repo name. This will create a new folder with the same name as your repo in the current directory.</p>
                <p>Now you can navigate into the repo folder using:</p>
                <pre><code class="language-bash">cd your-repo</code></pre>
                <p>and start working on your project.</p>
            </section>
            
            <section id="chapter-3">
                <h2>Putting it all Together</h2>
                <p>We have everything prepared to start working on our first repo. we have created a new repo and cloned it to our local machine. Navigate into our root directory and run:</p>
                <pre><code class="language-bash">echo. > your-file-name.md</code></pre>
                <p>or, if working on Mac/Linux:</p>
                <pre><code class="language-bash">touch your-file-name.md</code></pre>
                <p>This will create a new file in your repo. Now you can make changes. I will create some example text here for you to copy, or you can put whatever you want into it</p>
                <pre><code class="language-markdown">This is my first repo.</code></pre>
                <p>Before we move forward, it is a good idea to pause here and check to see what is in our staging area. This will be even more crucial when working on more complex projects. to do this, we run:</p>
                <pre><code class="language-bash">git status</code></pre>
                <p>This command will show you what changes have been made in your working directory and what changes are staged for the next commit. You should see your new file listed as "untracked". This means that Git is aware of the file, but it is not yet being tracked. This is because we have not yet staged it for a commit.</p>
                <p>Now that we have made our changes and have verified our staging area, we will stage our changes for a commit. Think of the entire workflow as shopping for groceries. Your working directory is your repository and the git staging area is your shopping cart. You may pick up many different items at the supermarket, but you don't have to put everything in your shopping cart. For adding a specific item to your "shopping cart" use:</p></p>
                <pre><code class="language-bash">git add your-file-name.md</code></pre>
                <p>and for adding everything you have changed to your staging area, use:</p>
                <pre><code class="language-bash">git add .</code></pre>
                <p>For this project, either option would be appropriate, but selecting specific changes to add would be appropriate if you finished one feature, but were still working on another. This prevents you from commiting partially completed code.</p>
                <p>Now that we have staged our changes, we can commit them. A commit is like a snapshot of your project at a specific point in time. To create a commit, run:</p>
                <pre><code class="language-bash">git commit -m "My first commit"</code></pre>
                <p>Notice that we added the -m flag. This is so we can add a message to describe the commit. This text should be direct and concise. We don't need to add extenuating details here because we will get an opportunity to do this later.</p>
                <p>The last command you will run from cmd/terminal in this workflow will be to push your changes on your local machine to your remote Github repository. To do this we will run:</p>
                <pre><code class="language-bash">git push origin main</code></pre>
                <p>This command pushes your changes to the remote repository named "origin" (which is the default name for the remote repo you cloned from) and to the branch named "main".</p>
            </section>

            <section id="chapter-4">
                <h2>Working with an Existing Repo</h2>
                <p>In most instances, especially when working with others, you will be working with a established repositories. This creates a slightly different workflow. The most important change being branches.</p>
                <p>Branches are essentially different versions of your project. The main branch is typically the stable version of your project, while other branches are used for development and testing. When working with others, it is important to create a new branch for each feature or bug fix you are working on. This allows you to work on your changes without affecting the main branch.</p>
                <p>To create a new branch, run:</p>
                <pre><code class="language-bash">git checkout -b your-branch-name</code></pre>
                <p>This will create a new branch and switch to it. For the sake of this example, I have created a new file with the procedure above called HelloWorld.java. It looks like this:</p>
                <pre><code class=language-java>public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}</code></pre>
                <p>Now that we have made our changes, we will follow the same workflow as before. remember to check your staging area, add your changes, and commit them with a short and sweet message. Finally, we will push our changes to the remote repository. However, this time we will be pushing to our new branch instead of the main branch. To do this, run:</p>
                <pre><code class="language-bash">git push origin your-branch-name</code></pre>
                <p>After pushing your changes, git will inform you that you can perform a pull request for your new branch by visiting your remote repository. Let's do that next.</p>
                <p>A pull request is a way to propose changes to a repository. It allows you to review and discuss the changes with others before merging them into the main branch. To create a pull request, navigate to your remote repository on Github and click the "Compare & pull request" button next to your new branch. This will take you to the pull request page where you can add a title and description for your pull request. Here, you can be verbose as you want to be about the changes made to the code. Once you are ready, click the "Create pull request" button.</p>
                <p>At this point, you are likely done with a collaborative workflow. keep an eye out for your colleagues since they may want to discuss changes via a thread located on your pull request. Even if you have the correct privileges to merge your own pull request, it is helpful to have your development team put eyes on your code. For this example, we can just merge it anyway to see what it looks like. Github will inform you that your pull request has been merged and closed and the green pull request icon will have turned purple.</p>
            </section>

            <section id="chapter-5">
                <h2>Tying the bow</h2>
                <p>Congratulations! You have successfully merged your first commit to github. But wait! There's More!</p>
                <p>Now that you have merged your changes, it's a good practice to sync your local repository with the remote repository to ensure you have the latest updates. To do this, switch back to the main branch and pull the latest changes:</p>
                <pre><code class="language-bash">git switch main</code></pre>
                and:
                <pre><code class="language-bash">git pull origin main</code></pre>
                <p>This will update your local main branch with the latest changes from the remote repository.</p>
                <p>If you are finished working with a feature branch, it is a good practice to keep your working tree clean. Run:</p>
                <pre><code class="language-bash">git branch -d your-branch-name</code></pre>
                <p>This will delete the branch from your local machine. Note that this does not delete the branch from the remote repository. To delete the branch from the remote repository, run:</p>
                <pre><code class="language-bash">git push origin --delete your-branch-name</code></pre>
                <p>Now we are ready to stop working and we have made the process of starting work again easy.</p>
            </section>

            <section id="conclusion">
                <h2>Conclusion</h2>
                <p>If you made it this far, Congratulations! let's recap what we have accomplished:</p>
                <ul>
                    <li>Installed Git and configured it with our user name and email</li>
                    <li>Created a Github account and a new repository</li>
                    <li>Cloned the repository to our local machine</li>
                    <li>Created a new file, made changes, staged, committed, and pushed them to the remote repository</li>
                    <li>Created a new branch, made changes, staged, committed, and pushed them to the remote repository</li>
                    <li>Created a pull request and merged it into the main branch</li>
                    <li>Synced our local repository with the remote repository and cleaned up our branches</li>
                </ul>
                <p>With these fundamental skills, you are now equipped to manage your code effectively and collaborate with others using Git and GitHub. Happy coding!</p>
            </section>
        </main>
    </div>

    <script src="../assets/js/guide-nav.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-bash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-java.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markdown.min.js"></script>
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

</body>
</html>