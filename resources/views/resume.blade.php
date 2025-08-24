@extends('layouts.master')

@section('title', 'Resume | Prantor\'s Portfolio')

@section('content')
  <div class="container mt-5">
    <h1 class="jura mb-4">Resume</h1>

    <!-- Professional Summary -->
    <section class="mb-5">
      <h2 class="jura">Professional Summary</h2>
      <div class="card mb-3">
        <div class="card-body">
          <p class="card-text">
            Final-year Computer Science and Engineering student with strong expertise in data structures, algorithms, and
            web development. Experienced in competitive programming, problem setting, and mentoring. Passionate about
            building scalable software solutions and learning modern technologies, including Go, distributed systems, and
            cloud architecture. Motivated to contribute to high-performance software development teams and deliver
            efficient, maintainable, and impactful applications.
          </p>
        </div>
      </div>
    </section>

    <!-- Education Section -->
    <section class="mb-5">
      <h2 class="jura">Education</h2>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">B.Sc. in Computer Science and Engineering</h5>
          <h6 class="card-subtitle mb-2 text-muted">Daffodil International University, Dhaka, Bangladesh | 2022 - Present
          </h6>
          <p class="card-text">
          <ul>
            <li>CGPA: 3.86 / 4.00</li>
            <li>Expected Graduation: December 2025</li>
          </ul>
          </p>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section class="mb-5">
      <h2 class="jura">Technical Skills</h2>

      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h5>Programming Languages:</h5>
              <p>C, C++, JavaScript, Go</p>

              <h5>Web Development:</h5>
              <p>HTML, CSS, React.js, Next.js, TailwindCSS, REST APIs</p>

              <h5>Systems & DevOps:</h5>
              <p>Linux, Docker, RabbitMQ, Load Balancing, Distributed Systems, Basic Computer Networking</p>
            </div>
            <div class="col-md-6">
              <h5>Database:</h5>
              <p>MySQL</p>

              <h5>Version Control:</h5>
              <p>Git, GitHub</p>

              <h5>Tools:</h5>
              <p>VS Code, IntelliJ IDEA</p>

              <h5>Miscellaneous:</h5>
              <p>OOP, CLI</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Experience Section -->
    <section class="mb-5">
      <h2 class="jura">Experience</h2>

      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Trainer & Mentor</h5>
          <h6 class="card-subtitle mb-2 text-muted">Advanced Programming Camp, Daffodil International University</h6>
          <p class="card-text">
          <ul>
            <li>Mentored over 30 students in fundamental and advanced data structures, algorithms, and competitive
              programming contest strategies</li>
          </ul>
          </p>
        </div>
      </div>
    </section>

    <!-- Projects Section -->
    <section class="mb-5">
      <h2 class="jura">Projects</h2>

      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Online Judge Platform</h5>
          <p class="card-text">
          <ul>
            <li>Designed a scalable online judge platform using a microservice architecture to handle concurrent code
              submissions efficiently</li>
            <li>Implemented the core judge daemon in Go with RabbitMQ for reliable message queuing, leveraging Querium
              Queues to ensure fault-tolerant and durable message delivery for critical code submissions
              <a href="https://github.com" class="link-primary" target="_blank">[GitHub]</a>
            </li>
            <li>Integrated HAProxy for load balancing to distribute incoming submission requests across multiple queues in
              Querium Clone Cluster, ensuring high availability and optimized resource utilization</li>
            <li>Developed a responsive and user-friendly frontend using Next.js and TailwindCSS for real-time submission
              status updates and interactive problem solving
              <a href="https://github.com" class="link-primary" target="_blank">[GitHub]</a>
            </li>
          </ul>
          </p>
          <h6 class="card-subtitle mt-3 mb-2">Backend Architecture Overview:
            <a href="https://drive.com" class="link-primary" target="_blank">[Drive]</a>
          </h6>
        </div>
      </div>
    </section>

    <!-- Competitive Programming Section -->
    <section class="mb-5">
      <h2 class="jura">Competitive Programming</h2>
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <ul>
                <li>Codeforces: Pupil (Max 1278), 500+ problems solved
                  <a href="https://profile.com" class="link-primary" target="_blank">[Profile]</a>
                </li>
                <li>CodeChef: 3 Star (Max 1607)
                  <a href="https://profile.com" class="link-primary" target="_blank">[Profile]</a>
                </li>
                <li>LeetCode: 130+ problems solved
                  <a href="https://profile.com" class="link-primary" target="_blank">[Profile]</a>
                </li>
                <li>Unlock the Algorithm Programming Contest Jul-23 [Preliminary - B Slot]: Rank 5th
                  <a href="https://standings.com" class="link-primary" target="_blank">[Standings]</a>
                </li>
                <li>Unlock the Algorithm Programming Contest Feb-23 [Final]: Rank 5th, Secured 5th position
                </li>
                <li>ICPC Preliminary Dhaka Site 2024: Rank 91 (DIU-Unbreakable)
                  <a href="https://standings.com" class="link-primary" target="_blank">[Standings]</a>
                </li>
                <li>ICPC Asia Dhaka Regional Contest 2024 (On-site): Rank 180 (DIU-Unbreakable)
                  <a href="https://standings.com" class="link-primary" target="_blank">[Standings]</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Extra Curricular Activities -->
    <section class="mb-5">
      <h2 class="jura">Extra Curricular Activities</h2>
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <h5>Problem Setter & Judge:</h5>
              <ul>
                <li>DIU Unlock the Algorithm Programming Contest Spring-27 (Preliminary - A Slot)</li>
                <li>DIU Unlock the Algorithm Programming Contest Summer-25 (Preliminary - A Slot)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interests & Activities -->
    <section class="mb-5">
      <h2 class="jura">Interests & Activities</h2>
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <ul>
                <li><strong>Technical Interests:</strong> Competitive programming, distributed systems, cloud
                  architecture, and large-scale system design.</li>
                <li><strong>Community Involvement:</strong> Active member of the DIU Competitive Programming Community,
                  participating in and helping organize university-level contests and workshops.</li>
                <li><strong>Learning Goals:</strong> Continuously exploring Go programming, DevOp practices (CI/CD,
                  container orchestration, monitoring), in-depth system architecture, and microservices scalability to
                  enhance skills as a software engineer.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Download Resume Button -->
    <div class="text-center mb-5">
      <a href="#" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download me-2"
          viewBox="0 0 16 16">
          <path
            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
          <path
            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
        </svg>
        Download Full Resume (PDF)
      </a>
    </div>

    <!-- Back button -->
    <div class="mb-5">
      <a href="{{ route('home') }}" class="btn btn-outline-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
        </svg>
        Back to Home
      </a>
    </div>
  </div>
@endsection