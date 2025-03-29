@extends('layouts.intern.internLayout')

@section('styles')
<style type="text/css" rel="stylesheet">

        body {
                    font-family: 'Noto Sans Myanmar', sans-serif;
                }
            .card-custom {
            display: flex;
            justify-content: space-between;
            align-items: stretch; /* Ensure the card stretches to fill the container */
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            position: relative;
            padding: 0;
            margin: 0;
            width: 100%; /* Ensure the card body takes full width */
        }

        .card-text-content {
            width: 60%;
            padding: 20px;
            background-color: #F3F5FC; /* Ensure the background color is consistent */
            border-radius: 8px 0 0 8px; /* Rounded corners on the left side */
        }

        .card-image-container {
            width: 100%;
            height:100%;
            position: relative;
            overflow: hidden; /* Ensure the image doesn't overflow */
            border-radius: 0 8px 8px 0; /* Rounded corners on the right side */
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure the image covers the entire container */
            display: block; /* Remove any extra space below the image */
        }

        .custom-pagination-button {
            background-color: #474BC2;
            border: none;
            border-radius: 4px;
            width: 50px;
            height: 50px;
            color: white;
        }
</style>

@endsection
@section('content')
    <!-- Navigation Bar -->
    @include('layouts.intern.navbar')

    <!-- Program Page Section -->
    <section class="program-page bg-white py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4" style="font-size:48px;" data-translate="INTERNSHIP PROGRAM">INTERNSHIP PROGRAM</h2>
            <p class="text-center" style="font-size:24px;" data-translate="Shape the Future with a Paid Internship at Vanness Plus Consulting Co. Ltd in Thailand!">Shape the Future with a Paid Internship at Vanness Plus Consulting Co. Ltd in Thailand!</p>
            <div class="stats d-flex justify-content-center my-4">
                <div class="me-5 text-center"><strong>18</strong><br/><span data-translate="internship program"> internship program</span></div>
                <div class="me-5 text-center"><strong>35</strong><br/><span data-translate="position available">position available </span></div>
                <div class="text-center"><strong>4</strong><br/><span data-translate="job category">job category</span></div>
            </div>
            <div class="search-box text-center mb-5">
                <div class="input-group" id="input-search" style="width: 60%; margin: auto;" >
                    <input type="text" id="searchInput" class="form-control" style="border:none; box-shadow:0px 2px 2px rgba(0,0,0,0.1); background-color:#f3f5fc;"  placeholder="Enter the program you are interested in..." data-translate="Enter the program you are interested in...">
                    <button class="btn btn-dark" onclick="applySearch()" style="background-color:#474bc2;box-shadow:0px 4px 4px rgba(0,0,0,0.1); ">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            <div class="category-tabs text-center mb-4">
                <button class="category-btn btn btn-outline-secondary active" data-category="IT" data-translate="Information Technology" onclick="filterCategory('IT')">IT</button>
                <button class="category-btn btn btn-outline-secondary" data-category="Marketing" data-translate="Marketing" onclick="filterCategory('Marketing')">Marketing</button>
                <button class="category-btn btn btn-outline-secondary" data-category="Human Resources" data-translate="Human Resources" onclick="filterCategory('Human Resources')">Human Resources</button>
                <button class="category-btn btn btn-outline-secondary" data-category="Translation" data-translate="Translation" onclick="filterCategory('Translation')">Translation</button>
            </div>            
            <div id="listings" class="listings">
            @foreach ($categories as $category => $jobs)
                @foreach ($jobs as $job)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $job['title'] }}</h5>
                            <p class="card-text">{{ $job['description'] }}</p>
                            <p class="card-text">{{ $job['positions'] }} positions available</p>
                            <!-- Correct URL link with dynamic parameters -->
                            <a href="{{ route('internship', ['title' => urlencode($job['title']), 'category' => urlencode($category), 'positions' => $job['positions']]) }}" class="btn btn-dark">
                                Apply
                            </a>
                        </div>
                    </div>
                @endforeach
            @endforeach


            </div>


            <div id="pagination" class="pagination mt-4 d-flex justify-content-center">
                <!-- Pagination buttons will be dynamically created here -->
            </div>
            
        </div>
    </section>

  

    @include('layouts.intern.internFooter')
@endsection

@section('script')
    <script type="text/javascript">

                
                
                document.addEventListener('DOMContentLoaded', function() {
                    filterCategory('IT');
                });
                
                // Global declaration of category data
                const categories = {
            'IT': [
                { title: 'Software Developer Intern', description: 'Engage in hands-on development projects under the guidance of experienced software engineers. Participate in code reviews, learn software development best practices, and contribute to real-world applications.', positions: 3 },
                { title: 'Network Administrator Intern', description: 'Assist with the maintenance and optimization of network operations. Gain experience with network configuration, troubleshooting, and ensuring secure and stable network performance.', positions: 2 },
                { title: 'Web Developer Intern', description: 'Support the design and development of web applications. Collaborate with UI/UX designers and backend developers to create responsive and user-friendly websites.', positions: 2 },
                { title: 'Data Analyst Intern', description: 'Work with large datasets to extract meaningful insights and assist in decision-making processes. Learn to use analytical tools and software to create reports and visualize data effectively.', positions: 1 },
                { title: 'Security Specialist Intern', description: 'Contribute to the strengthening of our cybersecurity measures. Assist with vulnerability assessments, security audits, and the implementation of security protocols.', positions: 1 }
            ],
            'Human Resources': [
                { title: 'HR Trainee', description: 'Support the HR team in day-to-day operations including recruitment, staff orientation, and employee welfare programs. Gain valuable insight into human resources management in a dynamic corporate environment.', positions: 3 },
                { title: 'Recruitment Coordinator Intern', description: 'Assist with the coordination of recruitment processes. Help organize job postings, review resumes, schedule interviews, and participate in the selection process.', positions: 2 },
                { title: 'Employee Relations Intern', description: 'Help manage relationships with employees and ensure a harmonious workplace. Engage in conflict resolution, employee advocacy, and assist in organizing staff engagement programs.', positions: 1 },
                { title: 'HR Data Analyst Intern', description: 'Analyze HR metrics to provide insights that support strategic decisions. Work on projects involving data collection, analysis, and reporting to enhance HR initiatives.', positions: 1 },
                { title: 'Organizational Development Intern', description: 'Participate in the development and implementation of organizational change programs. Assist in workshops, training sessions, and activities that drive organizational effectiveness.', positions: 1 }
            ],
            'Marketing': [
                { title: 'Marketing Specialist', description: 'Take part in the development and execution of marketing strategies. Work closely with the marketing team to create campaigns that effectively promote the company’s products and services.', positions: 2 },
                { title: 'Content Marketing Intern', description: 'Create compelling content for blogs, social media, and the company’s website. Learn content strategy and SEO best practices to enhance digital marketing efforts.', positions: 2 },
                { title: 'Digital Marketing Intern', description: 'Support digital marketing campaigns through email, social media, and digital advertising. Gain insights into digital marketing analytics and campaign performance.', positions: 1 },
                { title: 'Social Media Marketing Intern', description: 'Manage and grow the company’s presence on social media platforms. Create engaging content, respond to comments, and analyze user engagement to improve social media strategies.', positions: 2 },
                { title: 'Event Marketing Intern', description: 'Assist in the planning and execution of marketing events. Help coordinate logistics, manage registrations, and interact with attendees to enhance brand visibility and networking.', positions: 1 }
            ],
            'Translation': [
                { title: 'Translator Intern', description: 'Provide language translation services for documents and communications. Work with a team of linguists to ensure accurate and culturally relevant translations.', positions: 1 },
                { title: 'Localization Specialist Intern', description: 'Help adapt products or services for international markets. Focus on cultural, linguistic, and technical localization to ensure the company’s offerings resonate with local consumers.', positions: 1 },
                { title: 'Technical Translator Intern', description: 'Translate technical documents, manuals, and other materials. Work closely with technical teams to ensure clarity and accuracy in specialized content.', positions: 1 },
                { title: 'Multimedia Translator Intern', description: 'Engage in the translation and localization of multimedia content such as videos, presentations, and audio recordings. Ensure that multimedia translations align with the original tone and message.', positions: 1 },
                { title: 'Translator Intern', description: 'Provide language translation services for documents and communications. Work with a team of linguists to ensure accurate and culturally relevant translations.', positions: 1 },
                { title: 'Localization Specialist Intern', description: 'Help adapt products or services for international markets. Focus on cultural, linguistic, and technical localization to ensure the company’s offerings resonate with local consumers.', positions: 1 },
                { title: 'Technical Translator Intern', description: 'Translate technical documents, manuals, and other materials. Work closely with technical teams to ensure clarity and accuracy in specialized content.', positions: 1 },
                { title: 'Multimedia Translator Intern', description: 'Engage in the translation and localization of multimedia content such as videos, presentations, and audio recordings. Ensure that multimedia translations align with the original tone and message.', positions: 1 }
            ]
        };


                
                let currentCategory = 'IT'; 
                let currentPage = 1;
                const itemsPerPage = 5;
                
                function filterCategory(category) {
                    currentCategory = category; 
                    currentPage = 1; // Reset to the first page
                    applySearch(); 
                }
                
                function applySearch() {
                    const searchText = document.getElementById('searchInput').value.toLowerCase();
                    const filteredJobs = categories[currentCategory].filter(job => 
                        job.title.toLowerCase().includes(searchText) || job.description.toLowerCase().includes(searchText)
                    );
                    
                    updateListings(filteredJobs);
                }
                function updateListings(jobs) {
            const listingsElement = document.getElementById('listings');
            const paginationElement = document.getElementById('pagination');
            
            listingsElement.innerHTML = ''; 

            // Calculate pagination
            const totalPages = Math.ceil(jobs.length / itemsPerPage);
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const jobsToShow = jobs.slice(start, end);

            if (jobsToShow.length > 0) {
                jobsToShow.forEach(job => {
                    const jobElement = document.createElement('div');
                    jobElement.classList.add('card', 'mb-3');
        // Inside the jobElement.innerHTML in program.blade.php
        jobElement.innerHTML = `
            <div class="card-body row position-relative" style="background-color:white;margin:0;padding:0; border:0; border-radius: 8px; height:auto;">
                <!-- Left Column: Job Description (col-md-7) -->
                <div class="col-md-7 d-flex flex-column justify-content-start" style="background-color:#F3F5FC; margin:0;padding:20px; border-radius: 8px 0 0 8px;">
                    <h5 class="card-title" style="font-size:32px;" data-translate="${job.title}">${job.title}</h5>
                    <p class="card-text" style="font-size:20px;" data-translate="${job.description}">${job.description}</p>
                    <div class="row">
                        <div class="d-flex gap-2">
                            <button class="card-text" 
                                    style="border:none; background-color:#D1D1F0; border-radius:4px; width:auto;height:30px;">
                                <small class="text-muted" style="font-size:16px;">${currentCategory}</small>
                            </button>
                            <button class="card-text" 
                                    style="border:none; background-color:#B1BBE7; border-radius:4px;width:auto;height:30px;">
                                <small class="text-muted" style="font-size:16px;">${job.positions} positions</small>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 " style="background-color:white; margin:0;padding:0; border-radius:0 8px 8px 0; overflow: hidden; height: 100%;">
                    <!-- Full-width and full-height Image -->
                    <img class="card-image" src="${job.imgSrc || '../assets/img/hrphoto.png'}" alt="Job Image" 
                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px; margin: 0; padding: 0; display: block;">

                    <!-- "Apply" Button with URL Parameters -->
                    <a href="/internship?title=${encodeURIComponent(job.title)}&category=${encodeURIComponent(currentCategory)}&positions=${job.positions}" 
                    class="btn btn-dark" 
                    style="background-color:#474bc2; border:0; padding: 10px 20px; position: absolute; bottom: 10px; right: 10px;">
                    Apply
                    </a>
                </div>
            </div>
        `;
                    listingsElement.appendChild(jobElement);
                });
            } else {
                listingsElement.innerHTML = '<div class="text-center">No results found.</div>'; 
            }

            updatePagination(totalPages);
            updateActiveCategoryButton(currentCategory);
        }

        function updatePagination(totalPages) {
            const paginationElement = document.getElementById('pagination');
            paginationElement.innerHTML = '';

            // Ensure there's at least one button (for page 1)
            totalPages = Math.max(totalPages, 1);

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.classList.add("custom-pagination-button", 'mx-1');
                if (i === currentPage) {
                    button.classList.add('active');
                }
                button.addEventListener('click', () => {
                    currentPage = i;
                    applySearch(); // Refresh listings for the current page
                });
                paginationElement.appendChild(button);
            }
        }

                
        function updateActiveCategoryButton(activeCategory) { 
            document.querySelectorAll('.category-btn').forEach(btn => {
                // Check `data-category` instead of button text
                if (btn.getAttribute('data-category') === activeCategory) {
                    btn.classList.add('active');
                    btn.classList.remove('btn-outline-secondary'); // Remove outline style
                    btn.classList.add('btn-primary'); // Add active style
                } else {
                    btn.classList.remove('active');
                    btn.classList.remove('btn-primary');
                    btn.classList.add('btn-outline-secondary'); // Restore outline style
                }
            });
        }


        document.addEventListener('DOMContentLoaded', () => {
            filterCategory('IT'); // Default category
        });




    </script>
@endsection