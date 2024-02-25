<section class="doorway-sidebar" id="doorway-sidebar">
    <div id="doorway-sidebar--content" class="doorway-sidebar--content">
        {{-- sidebar content --}}
        <div class="top-fake"></div>
        <div class="top top-height">
           <a href="dashboard" class="menu <?php if ($page == "Dashboard") echo ' sidebar-active'; ?>">
                <i class="bi bi-house-fill"></i> <span class="sidebar-title">Dashboard</span>
           </a>
           <a href="visitors" class="menu <?php if ($page == "Visitors") echo ' sidebar-active'; ?>">
            <i class="bi bi-person-fill"></i> <span class="sidebar-title">Visitors</span>
           </a>
        </div>
        {{-- <div class="bottom top">
            <section class="menu">
                <i class="bi bi-power"></i> <span class="sidebar-title">Logout</span>
           </section>
         </div> --}}
        {{-- sidebar content end --}}
    </div>
</section>
<script>
    $(document).ready(function(){
        // expand sidebar on hover
        $('#doorway-sidebar').mouseenter(()=>{
            $('#doorway-sidebar').css('width','220px');
            $('.sidebar-title').css('display','block');
            $('.menu').css('justify-content','start');
        });
        // collapse sidebar on mouseleave
        $('#doorway-sidebar').mouseleave(()=>{
            $('#doorway-sidebar').css('width','70px');
            $('.sidebar-title').css('display','none');
            $('.menu').css('justify-content','center');
        });
    });
</script>
