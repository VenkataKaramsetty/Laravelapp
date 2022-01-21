<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Venkata Karamsetty's: Portfolio</title>
        <!-- tailwind css -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="antialiased">
    <section class="px-6 py-8">
        <nav class="flex justify-content-between align-items-center">
            <div>
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <img src="assets/images/image.jpg" alt="mdo" width="165" height="16" class="rounded-circle" style="width: 50px;">
                    <br>
                        <span class="fs-4"><h1 class="text-red-800">Venkata Sandeep Kumar Karamsetty</h1></span>
                </a>
            </div>
            <div>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#About" class="nav-link active" aria-current="page">About</a></li>
                    <li class="nav-item"><a href="#Education" class="nav-link">Studies</a></li>
                    <li class="nav-item"><a href="#Projects" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="#Experience" class="nav-link">Work Experience</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact Me</a></li>
                </ul>
            </div>
            
        </nav>
	

        <main class="max-w-6xl mx-auto mt-10 space-y-10">
            <a id="About">
                <article class="bg-gray-100 rounded-xl shadow-lg">
                    <div class="py-10 px-8 flex">
                        <div class="flex-1 flex:50% mr-8 flex-col justify-between">
                            <header>
                                <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-xs font-semibold" style="font-size: 30px">Objective</Object></a>
                            </header>
                            <br>
                            <p>
                                To excel as a software developer through hard work, perseverance and innovation. 
                                To be part of a leading company where I can get opportunities to show my talent and enhance 
                                my skills. To meet company goals and objectives with zeal and passion.
                            </p>
                            <header>
                                <center>
                                    <a href="#" class="px-3 py-1 border border-blue-300 rounded-full text-xs font-semibold" style="font-size: 30px">Skills</Object></a>
                                </center>
                                
                            </header>
                            <div class="py-10 px-8 inline-flex justify-between">
                                <div class="flex:30%">
                                    <p><strong>Programming Languages:</strong> </p>
                                    <br>
                                    <p><strong>Frame Works:</strong> </p>
                                    <br>
                                    <p><strong>Database:</strong> </p>
                                    <br>
                                    <p><strong>Development Environments:</strong> </p>
                                    <br>
                                    <p><strong>Web Technologies:</strong> </p>
                                    <br>
                                    <p><strong>Version Control:</strong> </p>
                                    <br>
                                </div>
                                <div class="flex:70% align-self-baseline">
                                    <p>PHP, JavaScript, C#, Python, Java, SAP ABAP, c++</p>
                                    <br>
                                    <p>Laravel, Nodejs, Reactjs</p>
                                    <br>
                                    <p>Mongodb, Sql</p>
                                    <br>
                                    <p>Visual Studio, php Storm, Docker, SAP</p>
                                    <br>
                                    <br>
                                    <p>HTML/CSS, JavaScript</p>
                                    <br>
                                    <p>git</p>
                                </div>
                            </div>

                        </div>
                        <div class="flex-1 flex:50% mr-8">
                            <img src="/assets/images/2999AC0220334860873_P.jpg" alt="profile_picture" class="rounded-xl shadow-lg">
                            <br>
                            <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:items-center sm:space-y-0 sm:space-x-6">
                                <div class="text-center space-y-2 sm:text-left">
                                    <div class="space-y-0.5">
                                        <p class="text-lg text-black font-semibold">
                                            Venkata Sandeep Kumar. Karamsetty
                                        </p>
                                        <p class="text-gray-500 font-medium">
                                            Software Engineer
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </a>

            <a id="Experience">
                <div class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl shadow-lg">
                    <header class="text-center my-3">
                            <a href="#" class="px-3 py-1 border text-red-300 rounded-full text-xs font-semibold shadow-lg" style="font-size: 30px">Professional Experience</Object></a>
                    </header>
                    <hr >
                    
                    <div class="p-0  mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
                        <div class="shrink-0">
                            <img class="h-20 w-20 rounded-full" src="assets/images/loopit.png" alt="ChitChat Logo">
                        </div>
                        <div>
                            <div class="text-xl font-medium text-black"><h4>Software Engineer (Aug 2021 - Current)</h4></div>
                            <p class="text-gray-500"><h4>Loopit.co | Sydney, Australia</h4></p>
                        </div>
                    </div>
                    <div class="p-0  mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
                        <br>
                        <ul>
                            <li>
                                Adding new software features to the loopit platform by consulting, analyzing, researching and evaluating system program needs, while working closely with the Product Managers, Technical Leads and other engineers
                            </li>
                            <li>
                                Development and maintenance of code for technical solutions that fulfill system designs, functional and non-functional requirements, as stipulated by user stories
                            </li>
                            <li>
                                Test-cases development, testing, debugging and bug-fixing for application within establishment testing protocols and peer reviewing standards to ensure that the application performs to required specifications
                            </li>
                            <li>
                                Recognizing technology limitations and drawbacks in present systems and associated processes for providing required results by leveraging the resources of other technologies 
                            </li>
                            <li>
                                Optimize queries, indexes, stored procedures, and application logic to increase throughput, availability, scalability, redundancy, superior performance, and quick recoverability as applicable
                            </li>
                            <li>
                                Adhering to good development practices: coding standards, documentation, code/design reviews, optimization and maintainability
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="p-0  mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
                        <div class="shrink-0">
                            <img class="h-20 w-20" src="assets/images/BL-logo1.jpeg" alt="Bannister Law">
                        </div>
                        <div>
                            <div class="text-xl font-medium text-black"><h4>PHP Web Developer (Apr 2021 – Jul 2021)</h4></div>
                            <p class="text-gray-500"><h4>Bannister Law | Suite 2, Level 9 Sydney, Australia</h4></p>
                        </div>
                    </div>
                    <div class="p-0  mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
                        <ul>
                            <li>
                                Gather Software requirements and proposing best solution for the requirement
                            </li>
                            <li>
                                Building Web applications as per the software requirements using technologies like word-press, PHP and javaScript.
                            </li>
                            <li>
                                Selecting best themes and plugins in word-press and customizing them using PHP as per requirement needs 
                            </li>
                            <li>
                                Database creation and handling users sensitive data by using c-panel on server by backend and UI screens 
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="p-0  mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
                        <div class="shrink-0">
                            <img class="h-20 w-20" src="assets/images/infosys.jpeg" alt="Infosys">
                        </div>
                        <div>
                            <div class="text-xl font-medium text-black"><h4>Systems Engineer (Sep 2015 - Jun 2018)</h4></div>
                            <p class="text-gray-500"><h4>Infosys | Banglore, India</h4></p>
                        </div>
                    </div>
                    <div class="p-0  mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
                        <ul>
                            <li>
                                Completed generic and stream training with percentage of 83, which involves Python, Sql and sap ABAP
                            </li>
                            <li>
                                Conducted various workshops to get problems of sap abap community in Infosys and worked on them to deliver
                            </li>
                            <li>
                                Developed tools and published in Infosys internal repository, used by Infosys employees to save time by reducing the need to build from scratch
                            </li>
                            <li>
                                Quality Assurance: Experienced as a software tester. Responsibilities included test case preparation, manual testing and documentation of the testing procedure. This includes reporting and tracking of bugs in JIRA 
                            </li>
                            <li>
                                Client Technical Support: for DAIMLER, a German multination automotive corporation. Developed an automated environment by using Infosys develops platform to handle their SAP environments
                            </li>
                        </ul>
                    </div>	
                </div>
            </a>

            <a id="Projects">
                <div class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl shadow-lg">
                    <header class="text-center my-3">
                            <a href="#" class="px-3 py-1 border text-red-300 rounded-full text-xs font-semibold shadow-lg" style="font-size: 30px">Projects</Object></a>
                    </header>
                    <hr >
                    
                    <dl>
                        <dt><strong>Reigning Cities – AR Based Game (Masters Final Project)</strong></dt>
                        <dd> 
                            <ul>
                                <li>A strategy-based AR game, where a player must build a virtual empire of his/her own in the real world using augmented reality. </li>
                                <li>Game has been completely developed by using unity for Graphical user interface and C# for logic of game.</li>
                                <li>I mainly worked on designing and building screens by using unity and worked on modules like Google AR plane tracking, soundtracks and GPS-Coordinate tracking. </li>
                            </ul>	   
                        </dd>
                    
                        <dt><strong>Big Data - Projects</strong></dt>
                        <dd>
                            <ul>
                                <li>Complete Data Analytics Lifecycle</li>
                                <li>Practical usage of R programming language for data analysis and statistical methods of evaluation</li>
                                <li>Clustering, Regression and Association rules of Advanced Analytics</li>
                                <li>Time Series Analysis for forecasting based on previous data</li>
                                <li>Sentiment Analysis by collecting tweets from twitter</li>
                                <li><strong>Git Repository: https://github.com/karamsetty09/Big-Data</strong>  </li>
                            </ul>
                        </dd>
                    
                        <dt><strong>Computer vision Projects</strong> </dt>
                        <dd>
                            <ul>
                                <li>Programmed with C++ and OpenCV 3.4.1 API function modules</li>
                                <li>Applied image processing: Colour interpolation, Colour Correction and Gamma Correction</li>
                                <li>Detecting key points from an image and compare two images based on SIFT descriptors</li>
                                <li>Detecting key points from an image and compare two images based on SIFT descriptors</li>
                                <li><strong>Git Repository:: https://github.com/karamsetty09/computer-vision </strong></li>
                            </ul>
                        </dd>
                    
                        <dt><strong>Computer vision Projects</strong> </dt>
                        <dd>
                            <ul>
                                <li>End to End Machine Learning project for housing prices on California housing prices dataset</li>
                                <li>Graph Based Semi Supervised Learning for Disease Detection in Plants</li>
                            </ul>
                        </dd>
                    </dl>
                    
                </div>
            </a>

            <a id="Certifications">
                <div class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl shadow-lg">
                    <header class="text-center my-3">
                            <a href="#" class="px-3 py-1 border text-red-300 rounded-full text-xs font-semibold shadow-lg" style="font-size: 30px">Certifications</Object></a>
                    </header>
                    <hr >
                    
                    <ul>
                        <li>FreeCodeCamp - Responsive Web Design</li>
                        <li>SMART UOW - IOT handling with Nodejs</li>
                    </ul>
                    
                </div>
            </a>

            <a id="Education">
                <div class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl shadow-lg">
                    <header class="text-center my-3">
                        <a href="#" class="px-3 py-1 border text-red-300 rounded-full text-xs font-semibold shadow-lg" style="font-size: 30px">Education</Object></a>
                    </header>
                    <hr >
                    
                        <div class="py-10 px-8 inline-flex justify-between">
                            <ul>
                                <li><strong>Professional Year(2020 - current)</strong><br/>Performance Education</li>
                                <li><strong>Master's Degree in Computer Science <a align = "right">(2018 - 2020)</strong></a>
                                        <br/><a href="https://www.uow.edu.au/index.html"><strong>University of Wollongong</strong></a> 
                                    </br>New South Wales - 2500, Australia.
                                    </br> -> Specialization in Machine Learning and Big Data. Expected completion in 2020.
                                </li>
                                <li><strong>Bachelor's Degree in Electronics and Computer Engineering (2011 - 2015)</strong>
                                    <br/><a href="https://www.kluniversity.in/"><strong>K L University</strong></a>
                                    </br>Andhra Pradesh - 522502, India
                                    </br> -> Graduated in First class with Distinction.
                                </li>
                            </ul>
                        </div>
                    
                </div>
            </a>
        </main>

    </section>

    <!--  
        <h2><img src="images/PE.png" alt="profexp_picture" width="52" height="52">Professional Experience</h2>
    <h2><img src="images/pro.png" alt="projects_picture" width="52" height="52">Projects</h2>
    <h2><img src="images/cer.png" alt="certifications_picture" width="52" height="52">Certifications</h2>
    -->

    <a href="register.html"><strong>Register</strong></a>

    <footer>
        <nav class="flex navbar fixed-bottom  align-items-center justify-content-between navbar-expand-sm navbar-dark bg-dark">flex justify-content-between align-items-center
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Address:</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">9/4 John Street, Gwynneville, NSW - 2500.</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="nav-item">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Mobile: +61 479155146</a>
                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Email: venkatasandeepkumarkaramsetty@gmail.com </a>
                        
                    </li>
                </ul>

            </div>
        </nav>
    </footer>
    </body>
</html>
