<?php
// Template Name: Home Page

get_header();
?>

<article>
    <section class="md:flex p-0 text-white">
        <div class="flex-1 relative md:h-auto h-[400px]">
            <figure class="w-full h-full relative z-0">
                <?php $image_id = 698;
                echo wp_get_attachment_image($image_id, "large", false, [
                    "loading" => "eager",
                    "class" => "image-cover",
                ]); ?>
                <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
            </figure>
            <div class="absolute z-10 md:w-1/2 w-4/5 flex items-center justify-center top-1/2 -translate-y-1/2 md:p-8 p-5 bg-primary/70 rounded-br-[50px]">
                <p class="md:text-3xl  font-semibold text-xl leading-tight mb-0">
                    Drive Impact-led <br>
                    transformation
                </p>
            </div>
        </div>
        <div class="flex-1 md:py-14 md:px-20 p-5 bg-third">
            <h2 class="text-center text-white">Get Your Brochure</h2>
            <?php echo do_shortcode('[wpforms id="705"]') ?>
        </div>
    </section>
    <section>
        <div>
            <div class="text-center mb-5">
                <h2 class="text-center mb-0">Program Overview</h2>
                <p class="mb-0">
                    Choose Your Track. Elevate Your Impact.
                </p>
            </div>
            <div>
                <p>Cornell Senior Executive Leadership Program (SELP) equips participants with the strategic foresight and innovative mindset essential for success through a unique blend of global experiential learning and tailored tracks. Our curriculum, meticulously crafted by world-class Cornell faculty, addresses the dynamic interplay of strategy, execution, innovation, sustainability and leadership in today’s context.</p>
                <p>At the heart of Cornell SELP lies the opportunity for tailored tracks, catering to the diverse needs of executive roles such as CEO, CSO, CFO, CTO, COO, CMO, and CHRO. The bespoke approach ensures that participants not only deepen their expertise but also apply it directly to their respective domains, fostering impactful and transformative leadership. Participants must choose their track at the beginning of the program and follow a personalized learning path.</p>
                <p>From immersive in-class sessions held in New York and Dubai to dynamic online modules, the 10 months program offers a comprehensive learning experience.</p>
                <p>Upon completion, participants qualify for the prestigious Cornell Executive Alumni Status, unlocking a plethora of advantages. Become part of an elite cohort of global leaders committed to driving organizational success.</p>
            </div>
        </div>
    </section>
    <section class="p-0">
        <div>
            <div class="w-[90%] section bg-primary rounded-br-[5rem] text-white">
                <ul class="list-none m-0 p-0 flex md:flex-row flex-col items-center justify-between md:gap-0 gap-5">
                    <li class="flex items-center gap-5 md:w-auto w-full">
                        <figure class="md:w-[50px] w-[40px]">
                            <?php $image_id = 711;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <div class="md:text-2xl sm:text-xl text-lg uppercase">
                            <span class="block">Start On</span>
                            <span class="block md:text-3xl sm:text-2xl text-xl font-semibold">
                                02 Sept 2024
                            </span>
                        </div>
                    </li>
                    <li class="flex items-center gap-5 md:w-auto w-full">
                        <figure class="md:w-[50px] w-[40px]">
                            <?php $image_id = 710;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <div class="md:text-2xl sm:text-xl text-lg uppercase">
                            <span class="block">DURATION</span>
                            <span class="block md:text-3xl sm:text-2xl text-xl font-semibold">
                                10 mONTHS
                            </span>
                        </div>
                    </li>
                    <li class="flex items-center gap-5 md:w-auto w-full">
                        <figure class="md:w-[50px] w-[40px]">
                            <?php $image_id = 709;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <div class="md:text-2xl sm:text-xl text-lg uppercase">
                            <span class="block">Program fee</span>
                            <span class="block md:text-3xl sm:text-2xl text-xl font-semibold">
                                USD 28,000
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="section">
                <p class="text-xs text-gray-400">The Program fee encompasses tuition fees, academic materials, and program-related meal expenses. Notwithstanding, the fees explicitly exclude transportation, lodging, visa charges, and any unspecified expenses. Furthermore, it does not encompass additional costs beyond those expressly detailed herein.</p>
                <p class="text-xs text-gray-400"> Please note that in the event of a global or regional catastrophe, or any unforeseen circumstances, the Program's schedule, delivery method, faculty, and associated elements are subject to change at the sole discretion of the university.</p>
            </div>
        </div>
    </section>
    <section class="bg-third">
        <h2 class="text-center text-white">
            Program Benefits
        </h2>

        <ul class="list-none p-0 m-0 flex flex-wrap md:gap-10 gap-5">
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 721;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div>
                    <p class="md:text-2xl text-xl font-medium">2 weeks in-class sessions at New York Campus and Dubai</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 720;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div>
                    <p class="md:text-2xl text-xl font-medium">Choose from 7 personalized tracks (CEO, CSO, CFO, CTO, COO, CMO, CHRO</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 719;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div>
                    <p class="md:text-2xl text-xl font-medium">9 Online sessions (100% LIVE interactive)</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 718;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div>
                    <p class="font-medium text-xl text-white">4 Online modules (8 weeks) </p>
                    <ul>
                        <li>Each Online Module Duration: 2 weeks</li>
                        <li>Includes 8 faculty interactions </li>
                    </ul>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 717;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div>
                    <p class="font-medium text-xl text-white">2 personalized track-based modules (4 weeks)</p>
                    <ul>
                        <li>(Choose among 10+ modules) </li>
                        <li>Includes 4 faculty interactions </li>
                    </ul>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 716;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div>
                    <p class="md:text-2xl text-xl font-medium">
                        Gamified Learning Experience includes Simulations on Leadership and Commercial Acumen
                    </p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 715;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div>
                    <p class="md:text-2xl text-xl font-medium">Earn Cornell Executive Alumni Status and Certificate from Cornell University</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 714;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div>
                    <p class="md:text-2xl text-xl font-medium">10 track-based courses</p>
                    <ul>
                        <li>
                            (Choose from 100+ curated courses relevant to your personalized track)
                        </li>
                    </ul>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 713;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div>
                    <p class="md:text-2xl text-xl font-medium">Elite cohort of diverse global leaders for impactful learning</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 712;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div>
                    <p class="md:text-2xl text-xl font-medium">2-year access to Cornell’s library of 2000+ courses</p>
                </div>
            </li>
        </ul>
    </section>
</article>

<?php get_footer(); ?>