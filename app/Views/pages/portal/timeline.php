<style>
    .timeline-container {
        overflow-x: auto;
        white-space: nowrap;
        position: relative;
        padding: 20px 0;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .timeline-item {
        display: inline-block;
        width: 250px;
        margin: 0 10px;
        vertical-align: top;
        text-align: center;
    }

    .timeline-item .timeline-marker {
        margin: 0 auto;
        background: #0d6efd;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .timeline-item .timeline-content {
        padding: 15px;
        background: #e9ecef;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .timeline-scroll {
        position: relative;
    }

    .timeline-scroll .scroll-left,
    .timeline-scroll .scroll-right {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background: #0d6efd;
        color: #fff;
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 10;
    }

    .timeline-scroll .scroll-left {
        left: 10px;
    }

    .timeline-scroll .scroll-right {
        right: 10px;
    }
</style>
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.2s">Contact Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item active text-warning">Contact</li>
        </ol>
    </div>
</div>
<!-- Header End -->


<!-- Roadmap -->
<div class="container my-5">
    <h2 class="text-center mb-4">Horizontal Roadmap Timeline</h2>
    <div class="timeline-scroll position-relative">
        <button class="scroll-left"><span>&larr;</span></button>
        <button class="scroll-right"><span>&rarr;</span></button>
        <div class="timeline-container d-flex align-items-center">
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h5>Phase 1</h5>
                    <p>Research</p>
                    <p>Jan - Mar 2024</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h5>Phase 2</h5>
                    <p>Design</p>
                    <p>Apr - Jun 2024</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h5>Phase 3</h5>
                    <p>Development</p>
                    <p>Jul - Sep 2024</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h5>Phase 4</h5>
                    <p>Testing</p>
                    <p>Oct - Nov 2024</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <h5>Phase 5</h5>
                    <p>Deployment</p>
                    <p>Dec 2024</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const timelineContainer = document.querySelector('.timeline-container');
    const scrollLeft = document.querySelector('.scroll-left');
    const scrollRight = document.querySelector('.scroll-right');

    scrollLeft.addEventListener('click', () => {
        timelineContainer.scrollBy({
            left: -300,
            behavior: 'smooth'
        });
    });

    scrollRight.addEventListener('click', () => {
        timelineContainer.scrollBy({
            left: 300,
            behavior: 'smooth'
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>