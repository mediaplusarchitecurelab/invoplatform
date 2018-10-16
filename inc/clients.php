<section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Clients</h3>
                <h1 class="display-2">Glint has been honored to
                partner up with these clients</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-outer" data-aos="fade-up">
            <div id="example-manipulation">
                <h3>Add Step</h3>
                <section>
                    <p>
                        <label for="title-3">HTML Title *</label><br />
                        <input id="title-3" type="text"><br />
                        <label for="text-3">HTML Content *</label><br />
                        <textarea id="text-3" rows="5"></textarea>
                    </p>
                    <p><a href="javascript:void(0);" onclick="$('#wizard-4').steps('add', { title: $('#title-3').val(), content: $('#text-3').val() });">Add</a></p>
                    <p>(*) Mandatory</p>
                </section>
                <h3>Insert Step</h3>
                <section>
                    <p>
                        <label for="position-3">Position (zero-based) *</label><br />
                        <input id="position-3" type="text"><br />
                        <label for="title2-3">HTML Title *</label><br />
                        <input id="title2-3" type="text"><br />
                        <label for="text2-3">HTML Content *</label><br />
                        <textarea id="text2-3" rows="5"></textarea>
                    </p>
                    <p><a href="javascript:void(0);" onclick="$('#wizard-4').steps('insert', Number($('#position-3').val()), { title: $('#title2-3').val(), content: $('#text2-3').val() });">Insert</a></p>
                    <p>(*) Mandatory</p>
                </section>
                <h3>Remove Step</h3>
                <section>
                    <p>
                        <label for="position2-3">Position (zero-based) *</label><br />
                        <input id="position2-3" type="text">
                    </p>
                    <p><a href="javascript:void(0);" onclick="$('#wizard-4').steps('remove', Number($('#position2-3').val()));">Remove</a></p>
                    <p>(*) Mandatory</p>
                </section>
            </div>
        </div> <!-- end clients-outer -->

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>Qui ipsam temporibus quisquam vel. Maiores eos cumque distinctio nam accusantium ipsum. 
                        Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium quos qui praesentium corpori.
                        Excepturi nam cupiditate culpa doloremque deleniti repellat.</p>

                        <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Tim Cook</span> 
                            <span class="testimonials__pos">CEO, Apple</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>

                        <img src="images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Sundar Pichai</span> 
                            <span class="testimonials__pos">CEO, Google</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>

                        <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Satya Nadella</span> 
                            <span class="testimonials__pos">CEO, Microsoft</span>
                        </div>

                    </div>

                </div><!-- end testimonials -->
                
            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->