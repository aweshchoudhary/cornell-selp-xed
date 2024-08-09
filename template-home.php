<?php
// Template Name: Home Page

get_header();
?>

<article>
    <section id="get-brochure" class="md:flex p-0 text-white">
        <div class="flex-1 relative md:h-auto h-[400px]">
            <figure class="w-full h-full relative z-0">
                <?php $image_id = 55;
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
            <?php echo do_shortcode('[wpforms id="12"]') ?>
        </div>
    </section>
    <section>
        <div>
            <div class="text-center mb-5">
                <h2 class="text-center mb-0">Program Overview</h2>
                <p class="mb-0 text-lg font-medium">
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
                            <?php $image_id = 61;
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
                            <?php $image_id = 60;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        </figure>
                        <div class="md:text-2xl sm:text-xl text-lg uppercase">
                            <span class="block">DURATION</span>
                            <span class="block md:text-3xl sm:text-2xl text-xl font-semibold">
                                10 months
                            </span>
                        </div>
                    </li>
                    <li class="flex items-center gap-5 md:w-auto w-full">
                        <figure class="md:w-[50px] w-[40px]">
                            <?php $image_id = 59;
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
                            <button name="show more details" aria-label="Show more details" class="text-base mt-1 block underline hover:text-white/80 transition text-left" onclick="showModal('emi_form_modal')">Easy EMI options available</button>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="section">
                <p class="text-xs text-gray-600">The Program fee encompasses tuition fees, academic materials, and program-related meal expenses. Notwithstanding, the fees explicitly exclude transportation, lodging, visa charges, and any unspecified expenses. Furthermore, it does not encompass additional costs beyond those expressly detailed herein.</p>
                <p class="text-xs text-gray-600"> Please note that in the event of a global or regional catastrophe, or any unforeseen circumstances, the Program's schedule, delivery method, faculty, and associated elements are subject to change at the sole discretion of the university.</p>
            </div>
        </div>
    </section>
    <div class="modal-custom" id="emi_form_modal">
        <div class="modal-content">
            <?php echo do_shortcode('[wpforms id="10" title="true"]'); ?>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <section class="bg-light-gray ">
        <h2 class="text-center ">
            Program Benefits
        </h2>
        <ul class="list-none p-0 m-0 flex flex-wrap md:gap-10 gap-5">
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:mx-0 mx-auto md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 69;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="md:text-left text-center">
                    <p class="md:text-2xl text-xl font-medium">2 week in-class sessions at New York Campus and Dubai</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:mx-0 mx-auto md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 70;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="md:text-left text-center">
                    <p class="md:text-2xl text-xl font-medium">Choose from 7 personalized tracks (CEO, CSO, CFO, CTO, COO, CMO, CHRO)</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:mx-0 mx-auto md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 71;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="md:text-left text-center">
                    <p class="md:text-2xl text-xl font-medium">9 Online sessions (100% LIVE interactive)</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:mx-0 mx-auto md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 68;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="md:text-left text-center">
                    <p class="font-medium text-xl">4 Online modules (8 weeks) </p>
                    <ul>
                        <li>Each Online Module Duration: 2 weeks</li>
                        <li>Includes 8 faculty interactions </li>
                    </ul>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:mx-0 mx-auto md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 67;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="md:text-left text-center">
                    <p class="font-medium md:text-2xl text-xl">2 personalized track-based modules (4 weeks)</p>
                    <ul>
                        <li>(Choose among 10+ modules) </li>
                        <li>Includes 4 faculty interactions </li>
                    </ul>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:mx-0 mx-auto md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 66;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="md:text-left text-center">
                    <p class="md:text-2xl text-xl font-medium">
                        Gamified Learning Experience includes Simulations on Leadership and Commercial Acumen
                    </p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:mx-0 mx-auto md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 65;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="md:text-left text-center">
                    <p class="md:text-2xl text-xl font-medium">Earn Cornell Executive Alumni Status and Certificate from Cornell University</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:mx-0 mx-auto md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 64;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="md:text-left text-center">
                    <p class="md:text-2xl text-xl font-medium">10 track-based courses</p>
                    <ul>
                        <li>
                            (Choose from 100+ curated courses relevant to your personalized track)
                        </li>
                    </ul>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:mx-0 mx-auto md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 63;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="md:text-left text-center">
                    <p class="md:text-2xl text-xl font-medium">Elite cohort of diverse global leaders for impactful learning</p>
                </div>
            </li>
            <li class="flex md:flex-row flex-col md:items-center gap-3 md:basis-1/3 flex-1 basis-full">
                <figure class="md:mx-0 mx-auto md:w-[100px] w-[80px] md:h-full shrink-0">
                    <?php $image_id = 62;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <div class="md:text-left text-center">
                    <p class="md:text-2xl text-xl font-medium">2-year access to Cornell’s library of 2000+ courses</p>
                </div>
            </li>
        </ul>
    </section>
    <section>
        <div>
            <h2 class="text-center">Curriculum</h2>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    IN-PERSON MODULE IN DUBAI (09-13 DECEMBER 2024)
                </h3>

                <h4 class="text-inherit">Interplay of Strategy, Execution and Leadership</h4>
                <p>
                    The module aims to provide a “state-of-the-art” overview of the key principles and practices of strategic management in today’s fast-paced competitive environment. It covers a range of topics designed to equip you with the necessary knowledge and skills to navigate the complexities of strategy development, execution, and leadership.
                </p>

                <div class="readmore-content mt-5" style="display: none;">
                    <div class="ob-tutorials section-video">
                        <p><strong>Strategy Fundamentals:</strong></p>
                        <ul>
                            <li>Understanding the concept of competitive strategy and distinguishing good strategy from others</li>
                            <li>Exploring the characteristics and components of effective strategy implementation</li>
                        </ul>
                        <p><strong>Global Context and Strategy Analysis:</strong></p>
                        <ul>
                            <li>Recognizing the impact of the global context on strategic decision-making</li>
                            <li>Developing skills in strategy analysis to gain valuable insights into market dynamics and competitive forces</li>
                        </ul>
                        <p><strong>Challenges in Strategy Execution:</strong></p>
                        <ul>
                            <li>Appreciating the complexities of implementing strategic initiatives in complex business environments</li>
                            <li>Identifying and addressing common challenges that arise during the execution phase</li>
                        </ul>
                        <p><span style="font-weight: 400;">Learn approaches, frameworks and techniques for developing capabilities for strategic thinking and execution. Understand how to develop and implement strategy in an increasingly complex and volatile operating environment.</span></p>
                        <p>A particular emphasis is placed on customer-focused growth exploration and the role of ambidextrous leadership in driving organizational success.</p>
                    </div>
                </div>

                <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="0" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    IN-PERSON MODULE IN CORNELL, NEW YORK CITY CAMPUS (09-13 JUNE 2025)
                </h3>

                <h4 class="text-inherit">Interplay of Innovation, Sustainability and Leadership</h4>
                <p>
                    The next 5 years may be the best time in history to build new things. If you have an innovation which has the potential to be profitable, your next step is to identify the internal or external organizational resources that help make your innovation unique. By developing these resources, you can enhance your market power and increase your likelihood of success. In this module, we will explore, learn from, and emulate, the culture and processes of companies whose innovation allows high-frequency experimentation.
                </p>

                <div class="readmore-content mt-5" style="display: none;">
                    <div class="ob-tutorials1 section-video1">
                        <p>To ensure the long-term viability of your innovation, you need to develop strategies to secure your resources and mitigate the power of rival firms thereby expanding your long-term competitive advantage. In this module, we will explore a variety of tactics and strategies you can use to protect your strategic resources and increase their value over time. These strategies will enable you to optimize your competitive advantage and create a more sustainable position.</p>
                        <p>Sustainable business opportunities can be simple, have positive impacts, and increase profitability — sometimes without having to do or change much about how a company functions. In this module, we will understand how businesses are increasing profitability by identifying and pursuing sustainable business opportunities. We will explore the many questions that businesses face in the changing landscape of sustainability norms, making it an area of untapped potential. Understand how businesses can be a facilitator for system-level change in the face of significant global issues by making deliberate decisions along the lines of sustainability.</p>
                        <p>You will identify activities that will improve productivity and support forward-thinking and far-reaching transformation. You will then explore any gaps in your strategy and plan to support incremental change and further continuous improvement. You will also identify the risks you are willing to take.</p>
                        <p>You will also deep-dive into topics including:</p>
                        <ul>
                            <li>Learn the ‘Do-Think-Do’ innovation-focused approach</li>
                            <li>How and why innovation and execution are diametrically opposite skillsets</li>
                            <li>How to develop innovation and execution capabilities</li>
                            <li>How do businesses respond to sustainability norms</li>
                            <li>Decision-making in times of global change- Creativity, Innovation, Process, Sustainability</li>
                        </ul>
                        <p>Furthermore, the module covers essential topics related to effective leadership, including:</p>
                        <p><strong>Advanced Negotiation skills:</strong><br>Negotiation can be a complex and unpredictable process that requires you to juggle multiple factors. This module introduces you to basic distributive negotiation tactics. You are also provided with a practical tool to which you can refer as you prepare for any future negotiations that require the use of distributive tactics. Through a series of in-class exercises, we will learn fundamental tools and techniques to create value, claim our fair share of that value, and do both in a context where the parties may or may not be completely rational.</p>
                        <p><strong>Emotional and Social Intelligence:</strong><br><span style="font-weight: 400;">With the help of assessments and frameworks, participants will improve their emotional intelligence by better identifying and managing their emotions along with effectively navigating interactions with others, building trust, and engaging in differences, to enable outcomes with greater impact.</span></p>
                        <ul>
                            <li>Understanding the concept of emotional and social intelligence and its importance in leadership</li>
                            <li>Assessing personal emotional predispositions and exploring traits such as negative affect and positive affect</li>
                            <li>Enhancing self-awareness and self-management abilities to improve emotional intelligence</li>
                            <li>Learn about the key drivers and elements of Social Intelligence</li>
                            <li>Understand and deepen awareness of how others respond to you, how others see you responding to them and how you respond in moments of difference</li>
                        </ul>
                        <p><strong>Leading Effective Teams:</strong></p>
                        <ul>
                            <li>Gaining insights into the key factors that contribute to team effectiveness, including goals, roles, and processes</li>
                            <li>Acquiring skills to lead and improve team performance, regardless of technical expertise</li>
                        </ul>
                        <p><strong>Gamified Experience: Simulation on Leadership</strong><br>This award-winning simulation is a high-stakes wilderness expedition that challenges participants’ abilities in group dynamics and leadership. It immerses participants in an intense and gripping scenario where they take on one of five different roles within a climbing team aiming to conquer a treacherous mountain.</p>
                        <p>Throughout the simulation, the team faces the daunting task of reaching the summit, which involves passing through a series of five camps over six simulated days. This tightly-packed experience spans intense decision-making and teamwork. The climbers must confront a variety of critical factors, such as weather conditions, health concerns, available supplies, their ultimate objectives, and the speed at which they hike.</p>
                        <p>Complicating matters further, participants must handle three hidden challenges during their journey, each of which has significant repercussions on their progress. A major aspect of the simulation revolves around the delicate balance of information sharing. The team members are faced with the dilemma of deciding how much of the gathered information to disclose to their fellow climbers. This element adds a layer of complexity to the decision-making process and can significantly influence the group’s dynamics. The experience is meticulously designed to instill crucial skills like collaboration, strategic thinking, and leadership under pressure.</p>
                    </div>
                </div>

                <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="1" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    4 ONLINE MODULES
                </h3>

                <ul>
                    <li>Framing Complex problems with Systems Thinking</li>
                    <li>Problem Solving Using Evidence and Critical Thinking</li>
                    <li>Value Creation and Profitability</li>
                    <li>Cross-Cultural Communication</li>
                </ul>

                <div class="readmore-content mt-5" style="display: none;">
                    <div class="ob-tutorials6 section-video6">
                        <p><b>Framing Complex problems with Systems Thinking</b><span style="font-weight: 400;"> – Whether you need to tackle a complex project, communicate more effectively, rethink your organization or your job, solve world hunger, or figure out your teenager, systems thinking can help you. All of these are complex and challenging real-world problems, sometimes called wicked problems. We all confront problems, big and small, in our personal and professional lives, and most of us are searching for better ways to solve them. In this module, Professors Derek and Laura Cabrera will demonstrate how we can use systems thinking to solve everyday and wicked problems, transform our organizations, and increase our personal effectiveness. Systems thinking attempts to better align the way we think with how the real world works. Our thinking is based on our mental models, but these models, created from our unique perspective with its inherent biases, are usually inadequate representations of reality. The Cabreras illustrate how we can use feedback to recognize and adapt our mental models so that they better align with reality, enhancing our problem-solving capabilities. For systems thinking to be successful, it must be adaptive. In this module, you will explore the concept of complex adaptive systems, and while these systems seem unnecessarily complicated, the Cabreras will reveal a surprising discovery. Underlying all complex adaptive systems are simple rules, and applying these rules is the key to transforming the way we frame and solve everyday problems.</span></p>
                        <p><span style="font-weight: 400;">Takeaways</span></p>
                        <ul>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Identify and describe the problems you want to solve in your personal and professional lives</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Examine the mental models you have and how they differ from reality</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Determine how you can use feedback to improve your mental models</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Recognize the biases that you have that can distort your mental models</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Examine complex adaptive systems and the simple rules that underlie these systems</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Determine how systems thinking is a complex adaptive system</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Explore the four simple rules that underlie systems thinking</span></li>
                        </ul>
                        <p>&nbsp;</p>
                        <p><b>Problem Solving Using Evidence and Critical Thinking</b><span style="font-weight: 400;"> – </span><span style="font-weight: 400;">Have you ever known a very intelligent person who made a very bad decision? If so, you know that having a high IQ does not guarantee that you automatically make critically thoughtful decisions. Critically thoughtful problem-solving is a discipline and a skill—one that allows you to make decisions that are the product of careful thought, and the results of those decisions help your team and organization thrive. In this module, you will practice a disciplined, systematic approach to problem solving that helps ensure that your analysis of a problem is comprehensive, is based on quality, credible evidence, and takes full and fair account of the most probable counterarguments and risks. The result of this technique is a thoroughly defensible assessment of what the problem is, what is causing it, and the most effective plan of action to address it. Finally, you will identify and frame a problem by assessing its context and develop a well-reasoned and implementable solution that addresses the underlying causes.</span></p>
                        <p><span style="font-weight: 400;">Takeaways</span></p>
                        <ul>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Assess the context of the problem</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Determine the current and desired states and confirm this with decision makers</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Identify and articulate the questions that must be answered to bridge the gap between current state and desired future state</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Determine root causes and distinguish symptoms from problems</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Brainstorm a range of possible solutions to address each significant underlying cause</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Assess each option for the extent to which it bridges the gap between the current and future state, whether it is implementable, and if it is ethical</span></li>
                        </ul>
                        <p>&nbsp;</p>
                        <p><b>Value Creation and Profitability </b><span style="font-weight: 400;">– Increasing and sustaining profitability requires that you deliver unique value to consumers while guarding against competitive threats. Developing a successful strategy requires recognizing and planning for the specific challenges in your market so as to avoid costly mistakes, seize new opportunities, and raise long-run profits. In this module, you will explore a variety of real-world examples and powerful frameworks to supercharge your strategy and profitability. You will analyze how your organization currently creates value and strategize how best to create new value for your targeted customers, beyond what rivals offer.</span></p>
                        <p><span style="font-weight: 400;">Takeaways</span></p>
                        <ul>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Perform a market diagnosis to describe your target customers and determine how you can best create value</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">for them</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Develop a plan to align your organizational resources with your value creation objectives</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Identify and assess threats to your organization’s profits</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Select appropriate strategies to mitigate these and other threats you may encounter</span></li>
                        </ul>
                        <p><b>Cross-Cultural Communication</b><span style="font-weight: 400;"> – </span><span style="font-weight: 400;">The workplace is filled with employees, clients, and leaders from different backgrounds and cultures. Your Social Style® plays a role in how you communicate and behave in the workplace. This module will prepare you to communicate effectively, efficiently, and empathetically with different cultures no matter your Social Style®. In this module, you will practice becoming more aware of how your Social Style® is interpreted by others and how that impacts your interactions with others at work. You will also develop strategies for overcoming social blind spots in order to mitigate the risk of ineffective communication in cross-cultural settings. Finally, you will discover the ways you can adapt your Social Style® without compromising your core values for effective communication. By the end of this module, you will have gathered the tools needed to communicate appropriately and effectively in a cross-cultural environment.</span></p>
                        <p><span style="font-weight: 400;">Takeaways</span></p>
                        <ul>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Evaluate how your Social Style® is interpreted by others</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Become aware of your social blind spots in the cross-cultural work environment</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Adapt for effective communication</span></li>
                        </ul>
                    </div>
                </div>

                <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="2" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    PERSONALIZED TRACKS
                </h3>

                <p>At Cornell SELP, participants have the opportunity to personalize their learning journey through tracks, each designed to deepen expertise and drive impactful leadership. You get to choose from seven distinct tracks, in which you will gain access to 10+ modules and 100+ courses. You must complete 2 modules (2 weeks each) and 10 courses as part of your track.</p>

                <div class="readmore-content mt-5" style="display: none;">
                    <div class="ob-tutorials3 section-video3">
                        <p><b>Available personalized tracks:</b></p>
                        <p><strong>CEO (Chief Executive Officer)</strong></p>
                        <p><span style="font-weight: 400;">Develop strategic leadership skills essential for guiding organizations to success, covering topics such as Developing Innovation Strategy, Navigating the Global Business Landscape, Strategically Governing the Organization, Leading Strategic Change Initiatives and many more.</span></p>
                        <p><strong>CSO (Chief Strategy Officer)</strong></p>
                        <p><span style="font-weight: 400;">Explore innovative approaches to strategy development and execution, focusing on areas such as: Change, Disruption, and Growth, Game Theory and Business Strategy, Strategic Business Planning and Forecasting, Synergies, Mergers, Alliances and many more.</span></p>
                        <p><strong>CFO (Chief Financial Officer)</strong></p>
                        <p><span style="font-weight: 400;">Dive into financial management strategies and techniques critical for driving business performance, including topics such as Determining Appropriate Budgeting, Debt Financing, and Cash Flow, Financial Planning, Valuation and Dilution, Fundraising and Revenue Generation, Making Capital Investment Decisions and many more.</span></p>
                        <p><strong>CTO (Chief Technology Officer)</strong></p>
                        <p><span style="font-weight: 400;">Master technology-driven innovation and digital transformation strategies, exploring topics such as AI and Digital Technology: Opportunities and Pitfalls, AI and the Future of Work, Identifying New Business Models Enabled by AI, Demystifying AI and Digital Technologies and many more.</span></p>
                        <p><strong>COO (Chief Operating Officer)</strong></p>
                        <p><span style="font-weight: 400;">Gain insights into operational excellence and process optimization, covering areas such as Aligning Performance Measures with Business Strategy, Designing Organizations for Systems Thinking, Planning and Managing Resources, Identifying and Evaluating Risk and many more.</span></p>
                        <p><strong>CMO (Chief Marketing Officer)</strong></p>
                        <p><span style="font-weight: 400;">Explore cutting-edge marketing strategies and consumer insights, focusing on areas such as Creating and Communicating the Value of Your Brand, Drivers of Consumer Behavior: Attention, Emotion, Coherence, Using Behavioral Science to Influence Customer Behavior Online, Storytelling Across Media and many more.</span></p>
                        <p><strong>CHRO (Chief Human Resources Officer)</strong></p>
                        <p><span style="font-weight: 400;">Focus on human capital management and organizational development strategies, covering topics such as Aligning HR Strategy with Organizational Strategy, Diversity, Equity, and Inclusion at Work, Countering Bias in the Workplace for HR, Assessing the Financial, Strategic, and People-Related Return on Pay for Performance and many more.</span></p>
                    </div>
                </div>

                <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="3" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    ONLINE SESSIONS (100% LIVE)
                </h3>

                <ul>
                    <li>Managing Complexity</li>
                    <li>AI tools and applications</li>
                    <li>Creative Leadership</li>
                    <li>Operational Excellence</li>
                    <li>Commercial Acumen (Simulation – 5 sessions)</li>
                </ul>


                <div class="readmore-content mt-5" style="display: none;">
                    <div class="ob-tutorials2 section-video2">
                        <strong>Managing Complexity</strong><br><br>

                        In this immersive module, participants will gain insights into how the brain learns, how to learn more quickly, why we frequently make poor judgments and how to learn from both successes and failures. Through real-life examples and interactive activities, participants will learn how to make more deliberate and informed decisions while potentially doubling their learning capacity. Participants will also learn how to systematically think back on their experiences and draw lessons from them.<br><br>

                        <strong>AI tools and applications</strong><br>
                        <br>
                        In this module, participants will gain insights into the accelerating disruption of the Digital Age, drawing from best practices of digital leaders. Uncover the profound impact of AI on organizations, and understand the evolving landscape with a focus on leadership roles. Develop strategies for implementing AI, leading initiatives, and fostering a culture of innovation. Explore collaboration with AI for enhanced productivity with cutting edge tools. Anticipate future trends and discover how to nurture an AI-ready leadership mindset.<br><br>

                        <strong>Creative Leadership</strong><br>
                        <br>
                        In this intensive module, participants will develop an understanding of how to boost individual and collective creativity and get an appreciation of why so many organisations look at creativity as an important strategic capability. Learn techniques for boosting individual and collective creativity towards achieving higher levels of organisational innovation. Unleash your personal and organisational creative potential with interactive lectures, case study discussions and experiential exercises.<br>
                        <br>
                        <strong>Operational Excellence</strong><br>
                        <br>
                        The goal of this module is to provide participants with an in-depth understanding of how and why operational decisions are integral to the success of an organization. First participants explore the question of how a firm’s operations should be structured so as to be consistent with the firm’s chosen way to compete. Then participants will consider the question of what operational activities should remain in-house and what should be done by a business partner and the long-term implications of these decisions on competitive advantage and the issue of managing the business relationships with supply chain partners. The module will force participants to consider key decision categories in operations, e.g., capacity decisions, process choices and managing networks, and shows how these decisions can lead to distinctive capabilities.<br>
                        <br>
                        <strong>Commercial Acumen (Simulation – 5 sessions)</strong><br>
                        <br>
                        One of the biggest obstacles that hinder the growth of senior managers today is their inability to judge the financial strength of their strategic and operational decisions. This handicap results from a lack of financial background. Senior Executives who address this problem early enough can transform their careers with a new-found ability to visualize the cause and effect of their ideas in a financial context. This program provides a concise overview of how financial management is used to create higher market values for an organization, and how value creation impacts the day-to-day life of managers.<br>
                    </div>
                </div>

                <button name="show more details" aria-label="Show more details" class="cbtn-outline mt-5" data-target="4" onclick="toggleReadMore(this)">Read more</button>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    GAMIFIED EXPERIENCE: SIMULATION ON COMMERCIAL ACUMEN
                </h3>
                <p>
                    Through the use of a business simulation, the participants will understand financial statements and how financial decisions are made. They will work in groups to analyze a firm’s financials and discover its strengths and weaknesses, build a cost-pricing strategy, forecast cash flows, identify a new opportunity, select an investment project, analyze a new market, revisit the firm’s strategy, understand profitable growth and the value drivers for achieving the same.
                </p>
            </div>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    CORNELL’S LIBRARY OF 2000+ COURSES
                </h3>
                <p>
                    Choose from over 2000+ courses that will enhance your knowledge and skills across business functions. With unlimited access to Cornell’s resource library, you will have the opportunity to learn something new, every day. The course duration varies from 30 – 90 minutes. You will learn tools and concepts through online videos. You can also download the blended learning guide to teach, coach and train your team.
                </p>
            </div>
            <figure class="w-full">
                <?php $image_id = 72;
                echo wp_get_attachment_image($image_id, "large", false, [
                    "loading" => "lazy",
                    "class" => "image-contain",
                ]); ?>
                <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
            </figure>
        </div>
    </section>
    <section>
        <div>
            <h2 class="text-center">Experience the Pit Crew Challenge @ Cornell NY Campus</h2>
            <p>Discover the Pit Crew Challenge—an immersive, hands-on experience created to take your teamwork and leadership acumen to the next level. Immerse yourself in the fast-paced world of stock car pit crews with our Pit Crew Challenge module at Cornell’s New York Campus. This unique, high-adrenaline exercise shifts the paradigm from traditional team building by breaking down silos, enhancing collaboration, and building a mindset of continuous improvement. Join iconic facilitators of the Pit Crew Challenge transform you and your peers into a pit crew for a day as you unlock the secrets to high performing teams and exceptional collaboration.</p>

            <div class="md:w-4/5 mx-auto aspect-video mb-3 bg-gray-100">
                <div class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('https://cornell.selp.xedinstitute.org/wp-content/uploads/2024/08/Bob-Parker-Pit-Crew-Challenge-4801.mp4', this, true)">
                    <?php $image_id = 185;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-cover border",
                    ]); ?>
                    <div class="play-btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                            <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                        </svg>
                    </div>
                    </figure>

                </div>

            </div>
    </section>
    <section>
        <div>
            <h2 class="text-center">
                Hear from our Participants
            </h2>

            <ul class="list-none p-0 m-0 flex flex-wrap">
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('4PNUsD8wv3U', this)">
                            <?php $image_id = 136;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Lama Albabtain</p>
                    <p class="mb-0 text-sm">Founder & COO</p>
                    <p class="mb-0 text-sm">TBWA Worldwide</p>
                    <p class="mb-0 text-sm">Kuwait</p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('XG60ORmjJYk', this)">
                            <?php $image_id = 135;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Harold Tjiptadjaja</p>
                    <p class="mb-0 text-sm">Managing Director – Investment Banking</p>
                    <p class="mb-0 text-sm">Mandiri Sekuritas</p>
                    <p class="mb-0 text-sm">Jakarta, Indonesia</p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('sQ3_JpUO2P4', this)">
                            <?php $image_id = 134;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Elat Niyas</p>
                    <p class="mb-0 text-sm"> Treasury Manager</p>
                    <p class="mb-0 text-sm"> Al Masaood LLC</p>
                    <p class="mb-0 text-sm"> Abu Dhabi, UAE </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('9hjymVDqeNU', this)">
                            <?php $image_id = 133;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Samar Mohamed Omar Al Saggaf</p>
                    <p class="mb-0 text-sm"> Professor</p>
                    <p class="mb-0 text-sm"> King AbdulAziz University</p>
                    <p class="mb-0 text-sm"> Jeddah, Saudi Arabia </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('fxXH5f8OU54', this)">
                            <?php $image_id = 132;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Faisal Alkadi</p>
                    <p class="mb-0 text-sm"> Group Director</p>
                    <p class="mb-0 text-sm"> Althawaqh Food Company (AFCO)</p>
                    <p class="mb-0 text-sm"> Dammam, Saudi Arabia </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('DlXhXljDdeA', this)">
                            <?php $image_id = 131;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Bonny Loo</p>
                    <p class="mb-0 text-sm"> Chief Legal Counsel Hospital Authority Kowloon, Hong Kong </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('8uoMwhkLkO8', this)">
                            <?php $image_id = 130;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Nour El Houda Zorgui</p>
                    <p class="mb-0 text-sm"> Director, Dental Health Program </p>
                    <p class="mb-0 text-sm"> Saudi Commission for Health Specialties </p>
                    <p class="mb-0 text-sm"> Riyadh, Saudi Arabia </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('r3lsEUzFQTc', this)">
                            <?php $image_id = 125;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Seema Menon</p>
                    <p class="mb-0 text-sm"> Founder & CEO </p>
                    <p class="mb-0 text-sm"> Meridian Market Resources </p>
                    <p class="mb-0 text-sm"> Bangalore, India </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('MgC36CskSjc', this)">
                            <?php $image_id = 126;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Andre Sylvestre</p>
                    <p class="mb-0 text-sm"> Chairman & CEO </p>
                    <p class="mb-0 text-sm"> Eber Petrochemical Group </p>
                    <p class="mb-0 text-sm"> Jakarta, Indonesia </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('SncUi8m4FPY', this)">
                            <?php $image_id = 129;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Lester Fernandes</p>
                    <p class="mb-0 text-sm"> Principal Data Science CoE </p>
                    <p class="mb-0 text-sm"> LTIMindTree </p>
                    <p class="mb-0 text-sm"> Mumbai, India </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('qQioifbq0i8', this)">
                            <?php $image_id = 127;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Srikanth Lakshminarayanan</p>
                    <p class="mb-0 text-sm"> Vice President </p>
                    <p class="mb-0 text-sm"> Sagility </p>
                    <p class="mb-0 text-sm"> Manila, Philippines </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('P5MMUt8djMI', this)">
                            <?php $image_id = 128;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Surya Thammiraju</p>
                    <p class="mb-0 text-sm"> Executive Director </p>
                    <p class="mb-0 text-sm"> Chubb </p>
                    <p class="mb-0 text-sm"> Hyderabad, India </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('VHBY_Fq2Lts', this)">
                            <?php $image_id = 124;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Evi Afiatin</p>
                    <p class="mb-0 text-sm"> CFO </p>
                    <p class="mb-0 text-sm"> PT. Kawasan Industri Terpadu Batang </p>
                    <p class="mb-0 text-sm"> Jakarta, Indonesia </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('G5bN5O6eTbk', this)">
                            <?php $image_id = 123;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Saleh Binsaleh</p>
                    <p class="mb-0 text-sm"> Chief Strategy Planning Officer </p>
                    <p class="mb-0 text-sm"> King Saud University – Medical City </p>
                    <p class="mb-0 text-sm"> Riyadh, Saudi Arabia </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('w2s4y2dFv10', this)">
                            <?php $image_id = 122;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Sara McAleese</p>
                    <p class="mb-0 text-sm"> Director – Strategy and Transformation </p>
                    <p class="mb-0 text-sm"> Grant Thornton </p>
                    <p class="mb-0 text-sm"> Dubai, UAE </p>
                </li>
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('30raNV_3G9I', this)">
                            <?php $image_id = 121;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-3xl sm:text-2xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <p class="mb-0 font-medium text-lg">Shehab Sleem</p>
                    <p class="mb-0 text-sm"> Chief Development Officer </p>
                    <p class="mb-0 text-sm"> Public Investment Fund </p>
                    <p class="mb-0 text-sm"> Dubai, UAE </p>
                </li>
            </ul>
        </div>
    </section>
    <section>
        <div>
            <h2 class="text-center">
                Graduation Ceremony at the Cornell campus, New York
            </h2>

            <div class="flex flex-wrap md:gap-0 gap-3">
                <figure class="md:basis-4/5 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 81;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 80;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 79;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 78;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 77;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 76;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 75;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 74;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 73;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section>
        <div>
            <h2 class="text-center">
                The Global Cornell SELP Cohort
            </h2>

            <div class="flex flex-wrap md:gap-0 gap-3">
                <figure class="md:basis-4/5 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 85;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-4/5 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 84;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-4/5 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 82;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section>
        <div>
            <h2 class="text-center">
                Alumni Mixer
            </h2>

            <div class="flex flex-wrap md:gap-0 gap-3">
                <figure class="md:basis-4/5 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 83;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section>
        <div>
            <h2 class="text-center">
                Experience the vibrant Cornell Campus
            </h2>

            <div class="flex flex-wrap md:gap-0 gap-3">
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 90;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 89;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 88;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 144;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 87;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 86;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section>
        <div>
            <h2 class="text-center">
                In-class sessions in Dubai
            </h2>

            <div class="flex flex-wrap md:gap-0 gap-3">
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 94;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 92;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 93;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full md:px-3 md:py-5 mx-auto">
                    <?php $image_id = 91;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section class="section-y px-0">
        <div class="section-x">
            <h2 class="text-center">Faculty</h2>
        </div>
        <div class="relative">
            <button name="slide previous" aria-label="slide previous" class="slick-1-prev group md:left-12 left-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="rotate-180 group-hover:scale-125 transition-all" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>
            <button name="slide next" aria-label="slide next" class="slick-1-next group md:right-12 right-2 slick-btn">
                <svg class="group-hover:scale-125 transition-all" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>

            <div class="slick-slider-1 section-x relative z-0">

                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Allan_Filipowicz')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 101;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Allan Filipowicz</p>
                    <p class="mb-2 text-left text-sm">Clinical Professor of Management and Organisations</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Barbara_Mink')" class="cursor-pointer bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 98;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Barbara Mink</p>
                    <p class="mb-2 text-left text-sm">Senior Lecturer of Management Communication</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Justin_Johnson')" class="cursor-pointer bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 99;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Justin Johnson</p>
                    <p class="mb-2 text-left text-sm">Professor of Management</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Glen_Dowell')" class="cursor-pointer bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 97;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Glen Dowell</p>
                    <p class="mb-2 text-left text-sm">Professor of Management</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Risa_Mish')" class="cursor-pointer bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 96;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Risa Mish</p>
                    <p class="mb-2 text-left text-sm">Professor of Practice and
                        Management</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Derek_Cabrerra')" class="cursor-pointer bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 95;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Derek Cabrerra</p>
                    <p class="mb-2 text-left text-sm">Systems Scientist</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Gautam_Ahuja')" class="cursor-pointer bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 100;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Gautam Ahuja</p>
                    <p class="mb-2 text-left text-sm">Professor of Management and Organisations</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Karan_Girotra')" class="cursor-pointer bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 102;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Karan Girotra</p>
                    <p class="mb-2 text-left text-sm">Professor of Operations Technology
                        and Innovation</p>
                </div>
            </div>
        </div>
        <div class="section-x">
            <p class="text-xs text-center mt-8">
                Indicative faculty, subject to change based on availability and university guidelines
            </p>
        </div>
    </section>
    <section class="section-y px-0">
        <div class="section-x">
            <h2 class="text-center">
                Global Industry Experts
            </h2>
        </div>
        <div class="relative">
            <button name="slide previous" aria-label="slide previous" class="slick-2-prev group md:left-12 left-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="rotate-180 group-hover:scale-125 transition-all" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>
            <button name="slide next" aria-label="slide next" class="slick-2-next group md:right-12 right-2 slick-btn">
                <svg class="group-hover:scale-125 transition-all" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>

            <div class="slick-slider-2 section-x relative z-0">
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Jamie_Anderson')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 49;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Jamie Anderson</p>
                    <p class="mb-2 text-left text-sm">Professor of Creative Leadership</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Anton_Musgrave')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 48;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Anton Musgrave</p>
                    <p class="mb-2 text-left text-sm">Futurist and Business Strategist</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Olivier_Tabatoni')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 47;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Olivier Tabatoni</p>
                    <p class="mb-2 text-left text-sm">Professor of Finance and Strategy</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Mike_Grandinetti')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 46;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Mike Grandinetti</p>
                    <p class="mb-2 text-left text-sm">Professor of Innovation</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Edward_Rogers')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 103;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Edward Rogers</p>
                    <p class="mb-2 text-left text-sm">Ex Chief Knowledge Officer at NASA</p>
                </div>
                <div class="md:px-6 px-8 h-full">
                    <figure onclick="showModal('Medini_Singh')" class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 50;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Medini Singh</p>
                    <p class="mb-2 text-left text-sm">Professor of Operational Excellence</p>
                </div>
            </div>
        </div>
        <div class="section-x">
            <p class="text-xs text-center mt-8">
                Indicative faculty, subject to change based on availability
            </p>
        </div>
    </section>
    <section>
        <div>
            <h2 class="text-center">Hear From Faculty</h2>

            <div class="divide-y">
                <div class="flex items-center md:flex-row md:py-8 py-5 flex-col-reverse md:gap-10">
                    <div class="aspect-video h-full w-full bg-gray-100 flex-1">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('VOUd2sUvS2I', this)">
                            <?php $image_id = 119;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-5xl sm:text-3xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <h3 class="text-center flex-1 text-third">
                        Dr. Gautam Ahuja on Leading with a Strategic Mindset
                    </h3>
                </div>
                <div class="flex items-center md:flex-row-reverse md:py-8 py-5 flex-col-reverse md:gap-10">
                    <div class="aspect-video h-full w-full bg-gray-100 flex-1">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('j5lgy9-hd-M', this)">
                            <?php $image_id = 118;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-5xl sm:text-3xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <h3 class="text-center flex-1 text-third">
                        Prof. Jeremy Kagan on Entrepreneurial Mindset for Organizations
                    </h3>
                </div>
                <div class="flex items-center md:flex-row md:py-8 py-5 flex-col-reverse md:gap-10">
                    <div class="aspect-video h-full w-full bg-gray-100 flex-1">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('nVFLVjvYznI', this)">
                            <?php $image_id = 117;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-5xl sm:text-3xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <h3 class="text-center flex-1 text-third">
                        Dean Vishal Gaur and other Faculty on the Cornell Campus
                    </h3>
                </div>
                <div class="flex items-center md:flex-row-reverse md:py-8 py-5 flex-col-reverse md:gap-10">
                    <div class="aspect-video h-full w-full bg-gray-100 flex-1">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('HDbNTcPFHko', this)">
                            <?php $image_id = 116;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-cover border",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                            <div class="play-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:text-5xl sm:text-3xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                    <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                                </svg>
                            </div>
                        </figure>
                    </div>
                    <h3 class="text-center flex-1 text-third">
                        Prof. Glen Dowell on Leading Through Sustainability
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <section class="section-y px-0">
        <div class="flex justify-end">
            <div class="section bg-primary md:rounded-tl-[100px] text-white md:w-11/12">
                <h2 class="text-white">Cornell Executive Alumni Status</h2>
                <ul>
                    <li>Access to Cornell SELP Executive Alumni Portal</li>
                    <li>2-year access to On-Demand Library of 2000+ courses, with curated learning paths to continue your learning journey</li>
                    <li>Join the exclusive LinkedIn group for SELP cohorts</li>
                    <li>Invitations to in-person events, including Dubai modules for subsequent cohorts</li>
                    <li>Invitations to virtual sessions, including Cornell Keynote series and other guest speakers</li>
                    <li>30% fee waiver on all Cornell online certificate programs for 2 years</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="relative md:h-[800px] h-[550px] px-0 section-y">
        <div>
            <h2 class="text-center">Certificate</h2>
            <figure class="mx-auto md:w-1/2 w-11/12 h-full relative z-0">
                <?php $image_id = 104;
                echo wp_get_attachment_image($image_id, "large", false, [
                    "loading" => "lazy",
                    "class" => "image-contain",
                ]); ?>
                <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
            </figure>
        </div>
        <div class="text-white flex items-end section absolute -z-10 bottom-0 right-0 md:rounded-bl-[100px] md:h-1/3 h-2/3 md:w-11/12 bg-primary">
            <div class="text-sm">
                <p>
                    <em>
                        Upon successful completion of the program, you will earn a certificate of completion from Cornell University
                        <br>
                        Note: Certificate image is for illustrative purposes only and may be subject to change at the discretion of Cornell University.
                    </em>
                </p>
            </div>
        </div>
    </section>
    <section>
        <div>
            <div class="flex items-center md:flex-row-reverse flex-col-reverse md:gap-10">
                <div class="aspect-video h-full w-full bg-gray-100 flex-1">
                    <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('CgYotlupVNI', this)">
                        <?php $image_id = 115;
                        echo wp_get_attachment_image($image_id, "large", false, [
                            "loading" => "lazy",
                            "class" => "image-cover border",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                        <div class="play-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="md:text-5xl sm:text-3xl text-2xl" width="1em" height="1em" viewBox="0 0 256 256">
                                <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                            </svg>
                        </div>
                    </figure>
                </div>
                <h3 class="text-center flex-1">
                    Take a virtual tour of NYC's New Tech Hub - Cornell Tech Campus
                </h3>
            </div>
        </div>
    </section>
    <section>
        <div>
            <h2 class="text-center">
                Application Process
            </h2>

            <div>
                <p>When considering applications for this program, the Admissions Committee seeks a balance of function industry representation, as well as candidates’ professional experience and current organizational responsibilities.</p>

                <h3>The Admissions Committee assesses your:</h3>
                <ul>
                    <li>Application responses</li>
                    <li>CV or LinkedIn profile</li>
                    <li>Interaction with Admissions Panel</li>
                </ul>

                <p>The interaction allows the Admissions Committee to further evaluate your candidature for the program. We may choose to have a one-on-one discussion with candidates on a case-to-case basis to assess interpersonal and communication skills, work experience, career focus and motivations for pursuing this program.</p>

                <p>The interaction will be conducted online. The time and date will be communicated to you via email.</p>
            </div>

            <div class="flex flex-wrap md:gap-0 gap-3">
                <div class="md:basis-1/4 sm:basis-1/2 px-2.5 py-5">
                    <div class="md:size-14 size-10 mb-10 md:text-2xl text-xl font-semibold flex items-center justify-center rounded-full bg-primary text-white">
                        1
                    </div>

                    <h4>APPLICATION SUBMISSION</h4>
                    <p>Answer the questions and submit your CV/upload LinkedIn profile</p>
                </div>
                <div class="md:basis-1/4 sm:basis-1/2 px-2.5 py-5">
                    <div class="md:size-14 size-10 mb-10 md:text-2xl text-xl font-semibold flex items-center justify-center rounded-full bg-primary text-white">
                        2
                    </div>

                    <h4>APPLICATION REVIEW</h4>
                    <p>Admissions Committee will verify your application and evaluate it for eligibility and fit to the program</p>
                </div>
                <div class="md:basis-1/4 sm:basis-1/2 px-2.5 py-5">
                    <div class="md:size-14 size-10 mb-10 md:text-2xl text-xl font-semibold flex items-center justify-center rounded-full bg-primary text-white">
                        3
                    </div>

                    <h4>ONLINE INTERACTION</h4>
                    <p>Select candidates to be called for an online Interaction with the Admissions Panel</p>
                </div>
                <div class="md:basis-1/4 sm:basis-1/2 px-2.5 py-5">
                    <div class="md:size-14 size-10 mb-10 md:text-2xl text-xl font-semibold flex items-center justify-center rounded-full bg-primary text-white">
                        4
                    </div>

                    <h4>RESULT</h4>
                    <p> Receive a decision on your program application via an email from the Admissions Committee within 5 working days </p>
                </div>
            </div>
            <div>
                <p>
                    We do not discriminate against any person on the basis of race, colour, sex or sexual orientation, gender identity, religion, age, national or ethnic origin, political beliefs, veteran status, or disability in admission to, access to, treatment in, or employment in this program.
                </p>
            </div>
        </div>
    </section>
    <section class="section-y px-0">
        <div class="section-x">
            <h2 class="text-center">Testimonials</h2>
        </div>
        <div class="relative">
            <button name="slide previous" aria-label="slide previous" class="slick-1-prev group md:left-12 left-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="rotate-180 group-hover:scale-125 transition-all" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>
            <button name="slide next" aria-label="slide next" class="slick-1-next group md:right-12 right-2 slick-btn">
                <svg class="group-hover:scale-125 transition-all" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>

            <div class="slick-slider-1 section-x relative z-0">
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 113;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"The content provided during the program is eye opening and inspiring and especially great learning from peers from across geographies"</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Bonny Loo</p>
                            <p class="mb-2 text-sm">Chief Legal Counsel<br> Hospital Authority<br> Kowloon, Hong Kong</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 112;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"Great lecture on how to get things done and negotiation. The class was great and the topics were clearly articulated and delivered"</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Evi Afiatin</p>
                            <p class="mb-2 text-sm">CFO<br> PT. Kawasan Industri Terpadu Batang<br> Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 111;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"Prof. Allan is a fantastic professor. He kept us engrossed in learning new concepts throughout which is a great thing"</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Kiran Bhat</p>
                            <p class="mb-2 text-sm">Managing Director<br> Xebec Communications Pvt.Ltd<br> Pune, India</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 110;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"It has been a wonderful experience. Gained a whole different perspective towards various challenges. It really helped to learn more"</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Rajesh Kachave</p>
                            <p class="mb-2 text-sm">Chief Business Officer<br> Avanse Financial Services<br> Mumbai, India</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 109;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"Loved this experience. The professors have intense enthusiasm and a wealth of knowledge. I am looking forward to reflecting on the learnings and putting it into practice"</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Sara McAleese</p>
                            <p class="mb-2 text-sm">Director - Strategy and Transformation<br> Grant Thornton<br> Dubai, UAE</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 108;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"The Cornell Senior Executive Leadership Program is very intensive and mind-filling. Got a lot of knowledge in the area that I was not too savvy: Digital & Technology. The Cornell campus experience was very challenging, yet stimulating."</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Harold Tjiptadjaja</p>
                            <p class="mb-2 text-sm">Managing Director Investment Banking<br> Mandiri Sekuritas<br> Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 107;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"An enriching experience at the Cornell campus. Interacted with global participants. Learned through simulations, case studies and interactions with esteemed Cornell professors on the integration of Digital, Strategy, Tech, Supply Chain and Sustainability. Truly empowering!"</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Samar Mohamed Omar Al Saggaf</p>
                            <p class="mb-2 text-sm">Professor<br> King Abdulaziz University<br> Jeddah, Saudi Arabia</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 106;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"I am happy to be part of Cornell's Senior Executive Leadership Program 2022- 2023. Day 1 at Cornell New York campus was an amazing start with insights on Strategy and Digital Technology."</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Manoj Divakaran</p>
                            <p class="mb-2 text-sm">Head of Client Reporting and Business Metrics<br> Alpha Alternatives<br> Mumbai, India</p>
                        </div>
                    </div>
                </div>
                <div class="md:px-3 px-6 h-full md:h-[522px]">
                    <div class="md:p-5 p-4 text-center bg-gray-100 h-full">
                        <figure class="aspect-square mx-auto rounded-full mb-3 w-1/3 overflow-hidden">
                            <?php $image_id = 105;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-cover",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure>

                        <div class="md:text-xl text-lg font-medium">
                            <p class="md:text-xl text-lg"><em>"It was an amazing week in Dubai. Met some amazing people during the cohort. I learned some things from a really different perspective."</em></p>
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold mt-3 mb-0 text-primary">Aashiesh Tavkarr</p>
                            <p class="mb-2 text-sm">Leadership Coach and Psychotherapist<br> Metanoia - Changing Mindsets<br> Pune, India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <div class="border-2 rounded-xl border-primary border-solid mx-auto md:w-1/2 md:p-10 p-5 text-center">
                <h2>Who Should Apply?</h2>
                <p>Cornell SELP is meticulously crafted to guide CXOs, business owners, and seasoned leaders through today's evolving business landscape, empowering them to excel amidst disruption and emerging challenges, with a key focus on their personalized tracks</p>

                <ul class="list-none p-0 text-left">
                    <li class="flex items-center gap-2">
                        <figure class="aspect-square size-9 shrink-0">
                            <?php $image_id = 114;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure> 10+ years of proven experience in leading high-performing teams or impactful projects
                    </li>
                    <li class="flex items-center gap-2">
                        <figure class="aspect-square size-9 shrink-0">
                            <?php $image_id = 114;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure> A minimum of a graduate degree
                    </li>
                    <li class="flex items-center gap-2">
                        <figure class="aspect-square size-9 shrink-0">
                            <?php $image_id = 114;
                            echo wp_get_attachment_image($image_id, "medium", false, [
                                "loading" => "lazy",
                                "class" => "image-contain",
                            ]); ?>
                            <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                        </figure> Country of residence at the time of enrolling must be Latin America, South Asia, Middle East, Africa, Far East
                    </li>
                </ul>
                <a href="/eligibility" class="cbtn-primary mx-auto">Apply Now</a>
            </div>
        </div>
        <div class="mt-10">
            <h2 class="text-center">
                Inquire for your organization
            </h2>
            <p>

                We feel that taking this program with your colleagues facilitates communication and accelerates impact in your organization. This also helps in having meaningful discussions with each other.
                <br><br>
                Learn with your colleagues and friends. We offer special discounts for groups
            </p>
            <a href="/get-in-touch" class="mx-auto cbtn-outline">Get In Touch</a>
        </div>
    </section>

    <div class="modal-custom" id="Edward_Rogers">
        <div class="modal-content">
            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 103;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Edward Rogers
                    </h2>
                    <h5 class="text-third">
                        Ex Chief Knowledge Officer at Nasa
                    </h5>

                    Edward Rogers joined NASA in 2003 after teaching strategy and entrepreneurship in Alabama. For seventeen years he served as the Chief Knowledge Officer at the NASA Goddard Space Flight Center in Greenbelt, Maryland until his retirement from government service in 2020. Edward Rogers received a B.S. in Agronomy from the Ohio State University, a Master’s in International Business from the University of South Carolina and a Ph.D. from Cornell University focusing on game theory applications to collaboration in high tech firms.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>

    <div id="Medini_Singh" class="modal-custom">
        <div class="modal-content">
            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 50;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Medini Singh
                    </h2>
                    <h5 class="text-third">
                        Professor of Operational Excellence
                    </h5>

                    Professor Medini Singh joined Columbia Business School in 2001 as a member of the Decision, Risk, and Operations Division. He teaches a variety of courses in Columbia’s MBA and Executive MBA programs, including the core course in Operations Management and electives in Supply Chain Management, Operations Strategy, and Service Operations Management. Professor Singh holds a B.E. in industrial engineering from the Indian Institute of Technology, Roorkee (India) and an M.E. in mechanical engineering, an M.S. in manufacturing and operations systems and a Ph.D. in Industrial Administration, all from Carnegie Mellon.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Olivier_Tabatoni" class="modal-custom">
        <div class="modal-content">
            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 47;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Olivier Tabatoni
                    </h2>
                    <h5 class="text-third">
                        Professor of Finance and Strategy
                    </h5>

                    Olivier Tabatoni is Associate Fellow at the Oxford University Saïd Business School. He was Visiting Professor at the Kellogg School of Management, Northwestern University and the Haas Business School, Berkeley. He regularly teaches in various universities and business schools in Europe including HEC Paris, Ecole Polytechnique or the Berlin School of Creative Leadership. Olivier Tabatoni received his Ph.D. in Finance from New York University’s Stern School of Management.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Jamie_Anderson" class="modal-custom">
        <div class="modal-content">
            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 49;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Jamie Anderson
                    </h2>
                    <h5 class="text-third">
                        Professor of Creative Leadership
                    </h5>

                    Jamie has held teaching positions at some of the world’s top business schools, such as London Business School, IMD, ESMT Berlin and the University of Melbourne. Named as a “management guru” by the Financial Times, Jamie has also been listed as one of the world’s top 25 management thinkers by the journal Business Strategy Review. He is passionate about teaching strategy, innovation and creativity.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Mike_Grandinetti" class="modal-custom">
        <div class="modal-content">
            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 46;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Mike Grandinetti
                    </h2>
                    <h5 class="text-third">
                        Professor of Innovation
                    </h5>

                    Mike Grandinetti is Adjunct Professor, School of Engineering at Brown University. As a veteran Silicon Valley engineer and McKinsey consultant, Mike has been in the practice of innovation and entrepreneurship as an operating executive and educator. Mike serves as a faculty member at Harvard & Rutgers and has been affiliated with MIT in various capacities. Mike has been continuously active in the fields of innovation, entrepreneurship, human-centric design and digital marketing since earning his Bachelor of Science in Engineering degree. He went on to earn his MBA degree with distinction at Yale.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Anton_Musgrave" class="modal-custom">
        <div class="modal-content">
            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 48;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Anton Musgrave
                    </h2>
                    <h5 class="text-third">
                        Futurist and Business Strategist
                    </h5>

                    Anton Musgrave lectures regularly for London Business School, Duke CE, IMD and Oxford’s Said Business School. He is passionate about teaching business strategy, innovation and the future. He has also served as Managing Partner of a large legal practice and Managing Director of a major property business. He shares an insightful understanding of the drivers of long-term business success, shifting business models and what it takes to stay ahead of the market.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>




    <div id="Allan_Filipowicz" class="modal-custom">
        <div class="modal-content">
            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 101;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Allan Filipowicz
                    </h2>
                    <h5 class="text-third">
                        Clinical Professor of Management and Organisations
                    </h5>

                    Allan Filipowicz is a Clinical Professor of Management and Organizations at the Samuel Curtis Johnson Graduate School of Management at Cornell University. Professor Filipowicz received his Ph.D. from Harvard University. He holds an MBA from The Wharton School, an MA in International Affairs from the University of Pennsylvania, and degrees in electrical engineering (MEng, BS) and economics (BA) from Cornell University. His professional experience includes banking (Bankers Trust, New York) and consulting, including running his own boutique consulting firm and four years with The Boston Consulting Group in Paris.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Karan_Girotra" class="modal-custom">
        <div class="modal-content">

            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 102;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Karan Girotra
                    </h2>
                    <h5 class="text-third">
                        Professor of Operations Technology and Innovation
                    </h5>

                    Karan Girotra is a Professor of Operations, Technology and Innovation at Cornell-Tech and the Samuel Curtis Johnson Graduate School of Management in the Cornell SC Johnson College of Business. He is the academic lead for the flagship studio-based education programs at Cornell Tech and is applying his research on innovation to help build a new model for graduate education. Prior to joining Cornell Tech, Karan held the Paul Dubrule Chair at INSEAD, earned a doctorate at the Wharton School and a bachelors degree from the Indian Institute of Technology, Delhi.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Derek_Cabrerra" class="modal-custom">
        <div class="modal-content">

            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 95;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Derek Cabrerra
                    </h2>
                    <h5 class="text-third">
                        Systems Scientist
                    </h5>
                    Derek Cabrera is an internationally known systems scientist who in 2021 was inducted as a Member of the International Academy for Systems and Cybernetic Sciences (IASCYS) for outstanding contributions to the field. He is the Faculty Director for the Graduate Certification Program in Systems Thinking, Modeling, and Leadership and is a senior scientist at Cabrera Research Lab. Cabrera has developed a suite of systems thinking tools for use in academia, business, and beyond including the first validated personal inventory of systems thinking.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Risa_Mish" class="modal-custom">
        <div class="modal-content">

            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 96;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Risa Mish
                    </h2>
                    <h5 class="text-third">
                        Professor of Practice and Management
                    </h5>
                    Risa Mish designed and teaches the MBA, EMBA, and Cornell-Tsinghua Core courses in Critical and Strategic Thinking, teaches elective courses in critical thinking and leadership, and was the founding faculty director of the Johnson Leadership Fellows program. Risa Mish serves as a keynote speaker and workshop leader at global, national, and regional conferences for corporations and trade associations in the consumer products, financial services, health care, high tech, media, and manufacturing industries
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Glen_Dowell" class="modal-custom">
        <div class="modal-content">

            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 97;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Glen Dowell
                    </h2>
                    <h5 class="text-third">
                        Professor of Management
                    </h5>
                    Glen Dowell is the Henrietta Johnson Louis Professor of Management and Associate Dean for Academic Affairs at the Johnson Graduate School of Management and Area Coordinator for the M&O Area at the SC Johnson College of Business. His researches are in the area of corporate sustainability, with a focus on firm environmental performance. He is a faculty affiliate for the Center for Sustainable Global Enterprise and is a faculty fellow at the Atkinson Center for a Sustainable Future.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Barbara_Mink" class="modal-custom">
        <div class="modal-content">

            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 98;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Barbara Mink
                    </h2>
                    <h5 class="text-third">
                        Senior Lecturer of Management Communication
                    </h5>
                    Barbara Mink is a management communication professional with a focus on intercultural communication, leadership, and persuasion. She teaches persuasive and informational writing for business purposes, as well as business presentations that are clear, concise, and compelling. Mink is also an active painter with an international presence.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Justin_Johnson" class="modal-custom">
        <div class="modal-content">

            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 99;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Justin Johnson
                    </h2>
                    <h5 class="text-third">
                        Professor of Management
                    </h5>
                    Professor Justin Johnson received his PhD in Economics from MIT and is currently the Deane W. Malott Professor of Management at the Johnson Graduate School of Management. Professor Johnson teaches Business Strategy to Executive MBA students. On four occasions he has received the EMBA Teaching Excellence Award, voted on by graduating EMBA students and awarded to one professor. In addition to his research, academic presentations, teaching, and executive development, Professor Johnson discusses his research and its relevance to current matters of interest with governmental bodies and other parties around the world, including the US Department of Justice, the US Federal Trade Commission, the EU Directorate General for Competition, the European Commission, and the UK Competition Authority.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
    <div id="Gautam_Ahuja" class="modal-custom">
        <div class="modal-content">

            <div class="flex md:flex-row flex-col md:gap-10 gap-5">
                <div class="basis-1/3">
                    <figure class="aspect-square w-full">
                        <?php $image_id = 100;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Cornell Selp or XED website image"; ?></figcaption>
                    </figure>
                </div>
                <div class="flex-1">
                    <h2 class="mb-2">
                        Gautam Ahuja
                    </h2>
                    <h5 class="text-third">
                        Professor of Management and Organisations
                    </h5>

                    Gautam Ahuja is a Professor of Management and Organizations at the Samuel Curtis Johnson Graduate School of Management at Cornell University. Ahuja teaches strategy and competitive analysis. In 2016, Ahuja received the BPS Wiley Outstanding Educator Award for his lifetime teaching contributions. At Cornell, he has received the Cornell-Tech Best Professor Award as well as the Johnson Graduate School of Management’s Apple Award. His research interests include competitive analysis, technology and innovation, globalization, and the use of inter-organizational arrangements.
                </div>
            </div>
        </div>
        <div class="c-backdrop">
            <button class="modal-close-btn">Close <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                </svg></button>
        </div>
    </div>
</article>
<div class="overlay fixed bottom-0 left-0 z-[999] w-full bg-white/85 py-3 flex justify-center backdrop-blur">
    <a href="/#get-brochure" class="cbtn-primary">Download Brochure</a>
</div>



<?php get_footer(); ?>