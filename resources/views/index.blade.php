<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="icon" type="image/x-icon" href="https://shivanshagarwal-portfolio.vercel.app/images/profile.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://shivanshagarwal-portfolio.vercel.app/css/style.css">

</head>

<body>
    <div class="portfolio-container">
        <!-- Left Box -->
        <div class="left-box">
            <!-- <img src="../images/profile.jpg" alt="Profile Photo"> -->
            <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo">
            <h5>Shivansh Agarwal</h5>
            <p>Software Developer</p>
            <hr width="100%">
            <div class="social-icons">
                <a href="https://github.com/shivansh324" target="_blank"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in//shivansh-agarwal-382426234" target="_blank"><i
                        class="bi bi-linkedin"></i></a>
                <a href="https://x.com/Shivansh030204?t=SWtXqJJTckT6X3scKU7MLQ&s=09" target="_blank"><i
                        class="bi bi-twitter"></i></a>
            </div>
            <hr width="100%">
            <!-- Email Section -->
            <div class="contact-info mb-3">
                <div class="info-box">
                    <!-- <h5>MAIL</h5> -->
                    <div>
                        <a class="link-light link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                            href="mailto:shivansha56@gmail.com"><i class="bi bi-envelope icon-yellow"></i>
                            <span>shivansha56@gmail.com</span></a>

                    </div>
                </div>
            </div>
            <!-- Location Section -->
            <div class="contact-info mb-4">
                <div class="info-box">
                    <!-- <h5>LOCATION</h5> -->
                    <div>
                        <i class="bi bi-geo-alt-fill icon-yellow"></i>
                        <span>Ghaziabad, Uttar Pradesh, India</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Box -->
        <div class="right-box">
            <!-- Nav Tab -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button"
                        role="tab">Skills</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="experience-tab" data-bs-toggle="tab"
                        data-bs-target="#experience" type="button" role="tab">Experience</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects"
                        type="button" role="tab">Projects</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                        type="button" role="tab">Contact</button>
                </li>
            </ul>

            <div class="tab-content mt-4" id="myTabContent">
                <!-- Skills -->
                <div class="tab-pane fade" id="skills" role="tabpanel">
                    <h3 class="mb-4" style="font-size: 2.5rem;">
                        <p style="text-decoration: underline; text-decoration-color:Yellow;">Skills</p>
                    </h3>
                    <div class="row text-center">
                        <!-- Section 1 -->
                        <div class="col-md-12 mb-4">
                            <div class="row">
                                <div class="col-3"><i class="fab fa-c"></i> <span style="font-size: 1.2rem;">C</span>
                                </div>
                                <div class="col-3"><i class="fab fa-cplusplus"></i> <span
                                        style="font-size: 1.2rem;">C++</span></div>
                                <div class="col-3"><i class="fab fa-java"></i> <span
                                        style="font-size: 1.2rem;">Java</span></div>
                                <div class="col-3"><i class="fab fa-js-square"></i> <span
                                        style="font-size: 1.2rem;">JavaScript</span></div>
                            </div>
                            <br>
                            <div class="row mb-4">
                                <div class="col-3"><i class="fab fa-ethereum"></i> <span
                                        style="font-size: 1.2rem;">Solidity</span></div>
                                <div class="col-3"><i class="fab fa-php"></i> <span
                                        style="font-size: 1.2rem;">PHP</span></div>
                            </div>
                            <hr class="mb-1">
                        </div>

                        <!-- Section 2 -->
                        <div class="col-md-12 mb-4">
                            <div class="row">
                                <div class="col-3"><i class="fab fa-java"></i> <span style="font-size: 1.2rem;">Spring
                                        Boot</span></div>
                                <div class="col-3"><i class="fab fa-laravel"></i> <span
                                        style="font-size: 1.2rem;">Laravel</span></div>
                                <div class="col-3"><i class="fab fa-node-js"></i> <span
                                        style="font-size: 1.2rem;">Node.js</span></div>
                                <div class="col-3"><i class="fab fa-node-js"></i> <span
                                        style="font-size: 1.2rem;">Express.js</span></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-3"><i class="fas fa-database"></i> <span
                                        style="font-size: 1.2rem;">MongoDB</span></div>
                                <div class="col-3"><i class="fas fa-database"></i> <span
                                        style="font-size: 1.2rem;">MySQL</span></div>
                            </div>
                            <hr class="mb-1">
                        </div>

                        <!-- Section 3 -->
                        <div class="col-md-12 mb-4">
                            <div class="row">
                                <div class="col-3"><i class="bi bi-git"></i> <span style="font-size: 1.2rem;">Git</span>
                                </div>
                                <div class="col-3"><i class="fa fa-wrench"></i> <span
                                        style="font-size: 1.2rem;">Postman</span></div>
                                <div class="col-3"><i class="fab fa-ethereum"></i> <span
                                        style="font-size: 1.2rem;">Hardhat</span></div>
                                <div class="col-3"><i class="bi bi-wallet2"></i> <span
                                        style="font-size: 1.2rem;">MetaMask</span></div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- Experience -->
                <div class="tab-pane fade show active experience-section" id="experience" role="tabpanel">
                    <div class="resume-button">
                        <a href="https://drive.google.com/file/d/1ZYAfy6ARiFNaFXrioe2C7tCUnettE_zt/view?usp=drive_link"
                            class="download-resume"><i class="fas fa-folder"></i> Download Resume</a>
                    </div>
                    <div>
                        <h3><span>
                                <i class="fas fa-code"></i>
                            </span>Experience</h3>
                        <div class="experience-timeline">
                            <div class="experience-item">
                                <div class="timeline-dot"></div>
                                <div class="experience-content">
                                    <h4 class="experience-position">Web Developer Intern</h4>
                                    <p class="company-name">Ixambee</p>
                                    <p class="experience-duration">Jun '24 – Sep '24</p>
                                    <ul>
                                        <li>
                                            <p class="experience-details"> Initiated and developed a project from
                                                scratch to the first cut using PHP Laravel, MongoDB, and MySQL,
                                                collaborating with team members to design and implement the
                                                architecture.</p>
                                        </li>
                                        <li>
                                            <p class="experience-details"> Developed in-house products to minimize
                                                reliance on external services, resulting in significant resource savings
                                                for the company.</p>
                                        </li>
                                        <li>
                                            <p class="experience-details"> Implemented the Drools decision engine to
                                                enable non-technical users to modify business logic independently,
                                                eliminating the need for developer intervention.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="experience-item">
                                <div class="timeline-dot"></div>
                                <div class="experience-content">
                                    <h4 class="experience-position">Backend Intern</h4>
                                    <p class="company-name">Black N Green</p>
                                    <p class="experience-duration">Aug '23 – Sep '23</p>
                                    <ul>
                                        <li>
                                            <p class="experience-details"> Implement scalable and flexible foundational
                                                APIs using Spring Boot, adhering to best practices for robust back-end
                                                functionality. Continuously refine Data Models and API Designs through
                                                iterative testing and feedback loops, enhancing functionality,
                                                performance, and user experience.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="experience-details"> Conduct a comprehensive analysis of project
                                                elements to identify key requirements, dependencies, and potential
                                                challenges, informing effective development strategies.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3><span>
                                    <i class="fa fa-certificate"></i>
                                </span>Ceritifications</h3>
                            <div class="experience-timeline">
                                <div class="experience-item">
                                    <div class="timeline-dot"></div>
                                    <div class="experience-content">
                                        <a class="link-light link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                            href="https://www.coursera.org/account/accomplishments/specialization/X4CG35VDA5YY">
                                            <h5 class="experience-position">Blockchain Specialization</h5>
                                            <p class="company-name">Coursera</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="experience-item">
                                    <div class="timeline-dot"></div>
                                    <div class="experience-content">
                                        <a class="link-light link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                            href="https://certificate.codingninjas.com/view/9253b62835a4c937">
                                            <h5 class="experience-position">DSA in Java</h5>
                                            <p class="company-name">Coding Ninjas</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3><span>
                                    <i class="fa fa-graduation-cap"></i>
                                </span>Education</h3>
                            <div class="experience-timeline">
                                <div class="experience-item">
                                    <div class="timeline-dot"></div>
                                    <div class="experience-content">
                                        <h5 class="experience-position">Guru Gobind Singh Indrapastha University</h5>
                                        <p class="company-name">2021 – 2025</p>
                                        <p class="experience-duration">B.Tech-InformationTechnology</p>
                                        <p class="experience-duration">CGPA: 8.883</p>
                                    </div>
                                </div>
                                <div class="experience-item">
                                    <div class="timeline-dot"></div>
                                    <div class="experience-content">
                                        <h5 class="experience-position">Mayo International School</h5>
                                        <p class="company-name">2020 – 2021</p>
                                        <p class="experience-duration">Class: XII</p>
                                        <p class="experience-duration">Percentage: 91.4</p>
                                    </div>
                                </div>
                                <div class="experience-item">
                                    <div class="timeline-dot"></div>
                                    <div class="experience-content">
                                        <h5 class="experience-position">Ch. Chhabil Dass Public School</h5>
                                        <p class="company-name">2018 – 2019</p>
                                        <p class="experience-duration">Class: X</p>
                                        <p class="experience-duration">Percentage: 92</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="projects" role="tabpanel">
                    <h3>Projects</h3>
                    <div class="projects-section">
                        <div>
                            <div class="project-card">
                                <img src="{{ asset('images/millow.png') }}" alt="Millow">
                                <div class="project-overlay">
                                    <a href="https://github.com/shivansh324/Millow" target="_blank"
                                        class="project-link">
                                        <i class="fas fa-code-branch"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="project-name">Millow</p>
                        </div>


                        <div>
                            <div class="project-card">
                                <img src="{{ asset('images/de.png') }}" alt="Decision Engine">
                                <div class="project-overlay">
                                    <a href="https://github.com/shivansh324/Decision-Engine" target="_blank"
                                        class="project-link">
                                        <i class="fas fa-code-branch"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="project-name">Decision Engine</p>
                        </div>
                        <div>
                            <div class="project-card">
                                <img src="{{ asset('images/codeial.png') }}" alt="Codeial">
                                <div class="project-overlay">
                                    <a href="https://github.com/shivansh324/codeial" target="_blank"
                                        class="project-link">
                                        <i class="fas fa-code-branch"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="project-name">Codeial</p>
                        </div>
                        <div>
                            <div class="project-card">
                                <img src="{{ asset('images/ixambee.png') }}" alt="">
                                <div class="project-overlay">
                                    <a href="https://ixambee.com" target="_blank" class="project-link">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="project-name">Adaptive Learning</p>
                        </div>

                    </div>
                </div>
                <!-- Contact -->
                <div class="tab-pane fade" id="contact" role="tabpanel">
                    <h4>I'm always open to new opportunities. Feel free to contact me!</h4>
                    <form id="contactForm" action="/send-email" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                                required>
                            <div id="emailError" class="text-danger mt-1" style="display: none;">Please enter a
                                valid
                                email.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3"
                                placeholder="Your Message" required>{{ htmlspecialchars(old('message')) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if(session('success'))
        <script>
            alert({{ session('success') }});
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    <script>
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            const email = document.getElementById('email').value;
            const emailError = document.getElementById('emailError');
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(email)) {
                e.preventDefault(); // Prevent form submission
                emailError.style.display = 'block';
            } else {
                emailError.style.display = 'none';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>