<div class="header-text">
        <h1>About <span>verve</span></h1>
    </div>
    <div class="about-container">
      <div class="about-item">
        <h2>About Us</h2>
        <p class="truncate-text">Verve Finance is an Australian owned private company based in Melbourne. 
          We understand that investing in a home or property is an important step in everyone's lives, our main mission is to find the best finance solutions to suit our clients.
          We have a great track record in helping families purchase their family home, investors looking to expand their property portfolios and provide the best solution for businesses that requires finance assistance.
          At Verve Finance, we provide our clients with property investment knowledge to ensure that at the end of the day they can make the best decisions for themselves and getting the most of their loans. Our mortgage broker can 
          provide you with valuable information about property investment and can assist in finding the best way to fast-track you to purchasing your property. The problem with most lending institution is that they are confined to their 
          limited products.  Here, we tailor mortgage and finance solutions for businesses, self-employed and individuals.  Along with our multitude of loan options available, Verve Finance is committed to finding the most appropriate solution 
          to best suit our clients situations.
        </p>
        <button class="read-more-btn">Read More</button>
      </div>
      <div class="about-item">
        <h2>Our Philosophy</h2>
        <p class="truncate-text">Verve Finance is a professional and client oriented firm. 
          Here, we believe that our clients are the basis to our success thus we are committed to providing great service with honesty and integrity, along with bringing superior customer satisfaction, and building close relationships along the way.
          We have great respect for our clients and strongly thrive to meet closely to their needs and expectations. 
          Our professionalism can be recognized through our qualified and experience consultants but we prefer to form comfortable business to customer relationships as well as maintaining strict confidentiality with all our dealings.
          Verve Finance have a proven track record in helping families buy their family home, investors expand their property portfolios, and find the best solutions for businesses that require finance. We educate our clients so that they 
          can make the best decisions for themselves and provide them with knowledge so they are getting the most out of their loans.
        </p>
        <button class="read-more-btn">Read More</button>
       </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const readMoreButtons = document.querySelectorAll('.read-more-btn');
    
    readMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const paragraph = this.previousElementSibling;
            paragraph.classList.toggle('expanded');
            
            if (paragraph.classList.contains('expanded')) {
                this.textContent = 'Read Less';
            } else {
                this.textContent = 'Read More';
                // Smooth scroll back to the start of the paragraph
                paragraph.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Only show read more button if content is actually truncated
    function checkTruncation() {
        document.querySelectorAll('.truncate-text').forEach(p => {
            const btn = p.nextElementSibling;
            if (p.scrollHeight > p.clientHeight) {
                btn.classList.remove('hidden');
            } else {
                btn.classList.add('hidden');
            }
        });
    }

    // Check on load and resize
    checkTruncation();
    window.addEventListener('resize', checkTruncation);
});
</script>