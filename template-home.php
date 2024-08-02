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
    <section>
        <div>
            <h2 class="text-center">Curriculum</h2>
            <div class="readmore-section md:mb-10 mb-5">
                <h3>
                    IN-PERSON MODULE IN DUBAI (9-13 DECEMBER 2024)
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
                <?php $image_id = 722;
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
            <h2 class="text-center">
                Hear from our Participants
            </h2>

            <ul class="list-none p-0 m-0 flex flex-wrap">
                <li class="lg:basis-1/4 md:basis-1/3 sm:basis-1/2 basis-full px-2.5 py-4">
                    <div class="w-full aspect-square mb-3 bg-gray-100">
                        <figure class="relative cursor-pointer group h-full w-full" onclick="lazyLoadVideo('4PNUsD8wv3U', this)">
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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
                            <?php $image_id = 7200;
                            echo wp_get_attachment_image($image_id, "large", false, [
                                "loading" => "lazy",
                                "class" => "image-contain border",
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

            <div class="flex flex-wrap">
                <figure class="md:basis-4/5 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 731;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 730;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 729;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 728;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 727;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 726;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 725;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 724;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 723;
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

            <div class="flex flex-wrap">
                <figure class="md:basis-4/5 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 735;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-4/5 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 734;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-4/5 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 733;
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

            <div class="flex flex-wrap">
                <figure class="md:basis-4/5 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 732;
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

            <div class="flex flex-wrap">
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 741;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 740;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 739;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 738;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 737;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 736;
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

            <div class="flex flex-wrap">
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 745;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 744;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 743;
                    echo wp_get_attachment_image($image_id, "large", false, [
                        "loading" => "lazy",
                        "class" => "image-contain",
                    ]); ?>
                    <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id); ?></figcaption>
                </figure>
                <figure class="md:basis-1/2 basis-full px-3 py-5 mx-auto">
                    <?php $image_id = 742;
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
            <button name="slide previous" aria-label="slide previous" class="faculty-slick-prev md:left-12 left-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="rotate-180" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>
            <button name="slide next" aria-label="slide next" class="faculty-slick-next md:right-12 right-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>

            <div class="slick-slider-faculty section-x relative z-0">
                <div class="p-6 h-full">
                    <figure class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 752;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Allan Filipowicz</p>
                    <p class="mb-2 text-left text-sm">Clinical Professor of Management and Organisations</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 753;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Karan Girotra</p>
                    <p class="mb-2 text-left text-sm">Professor of Operations Technology
                        and Innovation</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 751;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Gautam Ahuja</p>
                    <p class="mb-2 text-left text-sm">Professor of Management and Organisations</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 749;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Barbara Mink</p>
                    <p class="mb-2 text-left text-sm">Senior Lecturer of Management Communication</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 750;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Justin Johnson</p>
                    <p class="mb-2 text-left text-sm">Professor of Management</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 748;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Glen Dowell</p>
                    <p class="mb-2 text-left text-sm">Professor of Management</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 747;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Risa Mish</p>
                    <p class="mb-2 text-left text-sm">Professor of Practice and
                        Management</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 746;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Derek Cabrerra</p>
                    <p class="mb-2 text-left text-sm">Systems Scientist</p>
                </div>
            </div>
        </div>
        <div class="section-x">
            <p class="text-xs text-center">
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
            <button name="slide previous" aria-label="slide previous" class="faculty-slick-prev md:left-12 left-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="rotate-180" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>
            <button name="slide next" aria-label="slide next" class="faculty-slick-next md:right-12 right-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76" />
                </svg>
            </button>

            <div class="slick-slider-faculty section-x relative z-0">
                <div class="p-6 h-full">
                    <figure class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 514;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Medini Singh</p>
                    <p class="mb-2 text-left text-sm">Professor of Operational Excellence</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 515;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Jamie Anderson</p>
                    <p class="mb-2 text-left text-sm">Professor of Creative Leadership</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 516;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Anton Musgrave</p>
                    <p class="mb-2 text-left text-sm">Futurist and Business Strategist</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 517;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Olivier Tabatoni</p>
                    <p class="mb-2 text-left text-sm">Professor of Finance and Strategy</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 518;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Mike Grandinetti</p>
                    <p class="mb-2 text-left text-sm">Professor of Innovation</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="cursor-pointer group bg-light-gray aspect-square mb-3 w-full overflow-hidden group">
                        <?php $image_id = 754;
                        echo wp_get_attachment_image($image_id, "medium", false, [
                            "loading" => "lazy",
                            "class" => "image-cover group-hover:scale-105 transition-all",
                        ]); ?>
                        <figcaption class="sr-only"><?php echo wp_get_attachment_caption($image_id) ?? "Michigan Ross or XED website image"; ?></figcaption>
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Edward Rogers</p>
                    <p class="mb-2 text-left text-sm">Ex Chief Knowledge Officer at NASA</p>
                </div>
            </div>
        </div>
        <div class="section-x">
            <p class="text-xs text-center">
                Indicative faculty, subject to change based on availability
            </p>
        </div>
    </section>
</article>



<?php get_footer(); ?>