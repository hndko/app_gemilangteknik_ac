-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 11:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gemilang_teknikac`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `artikel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(50) NOT NULL,
  `judul` varchar(155) NOT NULL,
  `deskripsi` text NOT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `sampul` varchar(155) NOT NULL,
  `count_view` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`artikel_id`, `user_id`, `slug`, `judul`, `deskripsi`, `is_active`, `sampul`, `count_view`, `created_at`) VALUES
(1, 1, 'dolorum-optio-tempore-voluptas-dignissimos-cumque', 'Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia', '                                            &lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif;&quot;&gt;Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta. Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif;&quot;&gt;Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif;&quot;&gt;Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat. Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque. Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.&lt;/p&gt;&lt;h3 style=&quot;margin: 30px 0px 20px; font-weight: bold; color: rgb(68, 68, 68); font-size: 22px; font-family: Montserrat, sans-serif; padding: 0px;&quot;&gt;Et quae iure vel ut odit alias.&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif;&quot;&gt;Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui. Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea. Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif;&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;h3 style=&quot;margin: 30px 0px 20px; font-weight: bold; color: rgb(68, 68, 68); font-size: 22px; font-family: Montserrat, sans-serif; padding: 0px;&quot;&gt;Ut repellat blanditiis est dolore sunt dolorum quae.&lt;/h3&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif;&quot;&gt;Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel. Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; color: rgb(68, 68, 68); font-family: &amp;quot;Open Sans&amp;quot;, sans-serif;&quot;&gt;Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.&lt;/p&gt;                                        ', '1', 'cb9704120a3093dd30c66f63c9cd93a3.jpg', '13', '2024-01-22 11:06:12'),
(2, 1, 'the-experts-guide-to-writing-a-service-agreement-t', 'The Expert\'s Guide to Writing a Service Agreement That Will Wow Your Clients', '&lt;h2&gt;&lt;span style=&quot;color:black&quot;&gt;1. Introduction&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/h2&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;A well-crafted service agreement\r\nis crucial for any business owner looking to establish clear expectations and\r\nprotect their interests when entering into a client relationship. Understanding\r\nthe importance of a service agreement and knowing how to create one that\r\nsatisfies both parties can make all the difference in successfully running your\r\nbusiness. In this expert\'s guide, we will cover everything you need to know\r\nabout writing a service agreement that will wow your clients. From key elements\r\nto include and tips for writing concisely, to negotiating and reviewing the\r\nagreement, ensuring legal compliance, and communicating expectations, this\r\ncomprehensive guide has got you covered. So let\'s dive in and start impressing\r\nyour clients with an airtight service agreement!&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;color:black&quot;&gt;2. Understanding the importance of a service\r\nagreement&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/h2&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;A service agreement serves as a\r\nbinding contract between you and your clients. Its importance cannot be\r\noverstated. The agreement outlines the scope of work, payment terms, and other\r\nessential details, ensuring that both parties are on the same page. &lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;By having a service agreement in\r\nplace, you are protecting your business interests and minimizing the risk of\r\ndisputes or misunderstandings. It provides a clear framework for your clients\r\nto understand what they can expect from your services and helps manage their\r\nexpectations.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Furthermore, a well-written\r\nservice agreement showcases your professionalism and commitment to providing\r\nexceptional service. It demonstrates that you value open communication and\r\ntransparency with your clients. This will undoubtedly impress them and enhance\r\ntheir confidence in your abilities.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;In the next section, we will\r\nexplore the key elements to include in your service agreement to ensure it is\r\ncomprehensive and effective in meeting both your and your clients\' needs.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;color:black&quot;&gt;3. Key elements to include in your service\r\nagreement&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/h2&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;When drafting a service agreement\r\nthat will wow your clients, there are several key elements you should include\r\nto ensure its comprehensive and effective. These elements will not only protect\r\nyour business interests but also provide your clients with the clarity and\r\nreassurance they need.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;1. Scope of work: Clearly outline\r\nthe specific services you will be providing. Specify deadlines, deliverables,\r\nand any limitations or exclusions.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;2. Payment terms: Define the cost\r\nof your services, including any upfront fees, recurring payments, or additional\r\ncharges. Clarify the accepted payment methods and specify due dates.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;3. Duration and termination: State\r\nthe duration of the agreement, whether it is a one-time project or an ongoing\r\narrangement. Include provisions for termination, outlining the conditions under\r\nwhich either party can end the agreement.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;4. Intellectual property: Clearly\r\ndefine who owns the intellectual property rights for any work or materials\r\nproduced as part of the services. Specify any licensing or usage rights granted\r\nto the client.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;5. Confidentiality: Include a\r\nconfidentiality clause to protect sensitive business information or trade secrets.\r\nOutline the obligations of both parties to maintain confidentiality.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;6. Liability and indemnity:\r\nClearly state the limitations of your liability and outline any indemnification\r\nprovisions to protect your business from potential claims or losses.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;7. Dispute resolution: Provide a\r\nclear process for resolving any disagreements or disputes that may arise during\r\nthe course of the agreement. Consider including a mediation or arbitration\r\nclause to avoid costly legal battles.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;By including these key elements in\r\nyour service agreement, you are not only showcasing your professionalism but\r\nalso ensuring a clear and mutually beneficial working relationship with your\r\nclients. In the next section, we will dive deeper into each element, discussing\r\nbest practices and tips for effectively incorporating them into your agreement.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;color:black&quot;&gt;4. Tips for writing a clear and concise service\r\nagreement&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/h2&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Now that we have covered the\r\nessential elements to include in a service agreement, let\'s delve into some\r\ntips for effectively writing a clear and concise document that will impress\r\nyour clients.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Firstly, keep the language simple\r\nand easy to understand. Avoid using technical jargon or complex legal terms\r\nthat may confuse your clients. Remember that the purpose of the agreement is to\r\nprovide clarity and reassurance, so strive for simplicity in your wording.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Secondly, organize the agreement\r\nin a logical manner. Use headings, subheadings, and bullet points to break down\r\nthe different sections and make it easy for your clients to navigate. This will\r\nstreamline the reading process and ensure that important information is easily\r\naccessible.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Thirdly, be specific and detailed\r\nwhen outlining the scope of work, payment terms, and other provisions. Avoid\r\nambiguity by clearly defining the responsibilities and expectations of both\r\nparties. This will help prevent misunderstandings or disputes down the line.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Lastly, proofread and revise the\r\nagreement thoroughly before finalizing it. Check for any errors or\r\ninconsistencies and ensure that the document is free from any grammatical\r\nmistakes. Taking the time to polish your service agreement will demonstrate\r\nyour professionalism and attention to detail.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;By following these tips, you will\r\nbe able to craft a service agreement that not only meets the needs of your\r\nbusiness but also impresses your clients with its clarity and conciseness. In\r\nthe next section, we will discuss the importance of seeking legal advice and\r\nreview when creating a service agreement.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;color:black&quot;&gt;5. Negotiating and reviewing the agreement with\r\nyour clients&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/h2&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Once you have drafted your service\r\nagreement, it is crucial to engage in open and transparent negotiations with\r\nyour clients. This step is essential to ensure that both parties have a clear\r\nunderstanding of the terms and conditions outlined in the agreement.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Start by scheduling a meeting or a\r\ncall with your clients to discuss the agreement in detail. Allow them to ask\r\nquestions and seek clarification on any points they may find confusing. Be\r\nprepared to address any concerns they may have and be open to making reasonable\r\nmodifications to accommodate their needs.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;During the negotiation process, it\r\nis important to strike a balance between protecting your interests as a service\r\nprovider and meeting the expectations of your clients. Be flexible and willing\r\nto make adjustments that both parties can agree upon.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Once the agreement has been\r\nnegotiated and all parties are satisfied, it is crucial to seek legal review\r\nbefore finalizing the document. Consulting with a lawyer who specializes in\r\ncontract law will help ensure that your service agreement is legally binding\r\nand covers all necessary legal aspects.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Remember, a properly reviewed and\r\nnegotiated agreement provides a solid foundation for a successful business\r\nrelationship. By involving your clients in the process and seeking legal\r\nadvice, you demonstrate professionalism and a commitment to delivering\r\nexceptional service.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;In our next blog section, we will\r\ndiscuss the importance of clearly defining the termination and dispute resolution\r\nclauses within your service agreement. Stay tuned for more expert tips on\r\ncreating a service agreement that will wow your clients!&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;color:black&quot;&gt;6. Ensuring legal compliance in your service\r\nagreement&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/h2&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;In the previous blog section, we\r\nemphasized the importance of engaging in open and transparent negotiations with\r\nyour clients to ensure that both parties have a clear understanding of the\r\nterms and conditions in the service agreement. Now, let\'s shift our focus to\r\nensuring legal compliance in your service agreement.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;When it comes to drafting a\r\nservice agreement, it is crucial to pay careful attention to legal requirements\r\nand regulations that govern your industry. This means conducting thorough\r\nresearch and consulting with a lawyer who specializes in contract law.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Including clauses that outline the\r\ntermination and dispute resolution processes can help protect your interests\r\nand minimize the potential for conflicts down the line. Clearly define the\r\ncircumstances under which the agreement can be terminated by either party and\r\nthe process for resolving disputes.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Additionally, it is essential to\r\nensure that all the clauses and provisions in your agreement comply with\r\napplicable laws and regulations, including consumer protection laws,\r\nintellectual property rights, and privacy laws.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;By taking the necessary steps to\r\nensure legal compliance in your service agreement, you demonstrate\r\nprofessionalism and safeguard your business interests. In the next blog\r\nsection, we will delve into the specific clauses that should be included in\r\nyour service agreement to protect both you and your clients. Stay tuned for\r\nmore expert tips on creating a service agreement that will wow your clients!&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;color:black&quot;&gt;7. Communicating expectations and responsibilities\r\nin the agreement&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/h2&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Once you\'ve ensured legal\r\ncompliance in your service agreement, the next step is to effectively\r\ncommunicate the expectations and responsibilities of both parties. Clearly\r\noutlining these terms will help avoid any confusion or misunderstandings\r\nthroughout your business relationship.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Start by detailing the scope of\r\nthe services you will provide. This should include a comprehensive description\r\nof the tasks you will perform, the timeline for completion, and any limitations\r\nor exclusions. Be as specific as possible to avoid any ambiguity.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Next, define the responsibilities\r\nof your clients. Outline the information or materials they need to provide, any\r\ndeadlines they need to meet, and any other obligations they have in relation to\r\nthe services you will be delivering.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;It\'s also important to establish\r\nthe payment terms in the agreement. Clearly state your fees, how and when\r\npayment should be made, and any consequences for late payments or non-payment.\r\nIncluding a clause that addresses expenses and reimbursements can also help\r\nprotect your business.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Lastly, consider including clauses\r\nthat address confidentiality and intellectual property rights. If your clients\r\nwill be sharing sensitive information with you or if you will be creating\r\noriginal work, it\'s important to have clear guidelines on how these aspects\r\nwill be handled.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;By effectively communicating\r\nexpectations and responsibilities in your service agreement, you will set the\r\nfoundation for a successful working relationship with your clients. In the next\r\nblog section, we will dive into the importance of including clauses that\r\naddress liability and indemnification. These clauses will provide you with\r\nadditional protection and ensure a fair and equitable agreement for both\r\nparties. Stay tuned for more expert tips on creating a service agreement that\r\nwill wow your clients!&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;color:black&quot;&gt;8. Reviewing and updating your service agreement\r\nas needed&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/h2&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Once you\'ve created a\r\ncomprehensive service agreement, it\'s crucial to regularly review and update it\r\nas needed. As your business evolves and you gain more experience, you may\r\nencounter new situations or requirements that should be addressed in your agreement.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Set aside time every six months or\r\nannually to review your service agreement. Take into consideration any feedback\r\nor concerns from your clients, as well as any changes in industry regulations\r\nor best practices. This will not only ensure that your agreement remains\r\ncurrent and relevant, but it will also demonstrate your commitment to providing\r\nthe highest level of service to your clients.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;When making updates, be sure to\r\nclearly communicate any changes to your clients and obtain their agreement or\r\nsignature on the revised agreement. This will help avoid any misunderstandings\r\nor disputes down the line.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Remember, a well-crafted and\r\nregularly updated service agreement is a powerful tool that can protect your\r\nbusiness and help you maintain positive and long-lasting client relationships.\r\nSo, don\'t overlook the importance of this step in creating a service agreement\r\nthat will truly wow your clients.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;h2&gt;&lt;span style=&quot;color:black&quot;&gt;9. Final thoughts on creating a service agreement\r\nthat impresses your clients&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/h2&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;In conclusion, creating a service\r\nagreement that will wow your clients requires careful planning and regular\r\nmaintenance. By reviewing and updating your agreement on a regular basis, you\r\ncan ensure that it remains relevant and aligned with the changing needs of your\r\nbusiness and industry.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Communicating any changes to your\r\nclients and obtaining their agreement or signature on the revised agreement is\r\ncrucial in avoiding misunderstandings or disputes in the future. This step\r\ndemonstrates your commitment to transparency and professionalism.&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;color:black&quot;&gt;Remember, a well-crafted and\r\nregularly updated service agreement is a powerful tool that not only protects\r\nyour business but also helps you build trust and maintain positive client\r\nrelationships. So, invest the time and effort into creating a comprehensive and\r\nimpressive service agreement - it will definitely set you apart from the\r\ncompetition and leave a lasting impression on your clients.&lt;/span&gt;&lt;/p&gt;', '1', 'ee929a7f58d61ce15f1611ceae9e217c.jpg', '8', '2024-01-22 11:11:39'),
(5, 2, 'admin01', 'admin01', '&lt;p&gt;admin01&lt;br&gt;&lt;/p&gt;', '1', '2a5cb5648850d3766e96b3b870edc67c.jpg', '0', '2024-01-22 17:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokumentasi`
--

CREATE TABLE `tb_dokumentasi` (
  `dokumentasi_id` int(11) NOT NULL,
  `sampul` varchar(155) NOT NULL,
  `deskripsi` varchar(35) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tb_dokumentasi`
--

INSERT INTO `tb_dokumentasi` (`dokumentasi_id`, `sampul`, `deskripsi`, `is_active`, `created_at`) VALUES
(1, '3eb20fda78a7f280a1bf5bddf02c1da6.png', 'Penanganan Masalah AC Tidak Dingin', '1', '2024-01-21 00:10:08'),
(2, 'e5a2ffb4a3ce94db0971652aca9dc1d4.png', 'Layanan Rutin Perawatan AC', '1', '2024-01-21 00:10:27'),
(3, '7436cc8a19bc05b8df5d65b710e01322.png', 'Penambahan Freon Profesional', '1', '2024-01-21 00:10:37'),
(4, '0b1956e6e18c4ef445fb7a1192ca903d.png', 'Penanganan Perbaikan AC Netes Air', '1', '2024-01-21 00:10:45'),
(5, '72b14f70d697d949bce6531b6af27061.png', 'Pengecekan dan Pemeliharaan Freon', '1', '2024-01-21 00:10:54'),
(6, 'c0d0292eb3f031f03fa66a75e50a9a86.png', 'Penanganan Perbaikan Freon Bocor', '1', '2024-01-21 00:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klien`
--

CREATE TABLE `tb_klien` (
  `klien_id` int(11) NOT NULL,
  `sampul` varchar(155) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tb_klien`
--

INSERT INTO `tb_klien` (`klien_id`, `sampul`, `judul`, `is_active`, `created_at`) VALUES
(1, '38ba843529ff93bda0714e2750f35c49.png', 'Mixue', '1', '2024-01-21 00:36:00'),
(2, '5ba89cf3ae4f16145f38a4affb48dec2.png', 'Bahtera', '1', '2024-01-21 00:36:47'),
(3, 'fbb6229d42f95c83c8af0cb7063b4bf3.png', 'Tirto.id', '1', '2024-01-21 00:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `layanan_id` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `is_active` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`layanan_id`, `judul`, `deskripsi`, `is_active`) VALUES
(1, 'Pemasangan Unit AC', 'Dukungan profesional untuk memasang unit AC baru dengan presisi dan efisiensi.', '1'),
(2, 'Maintenance AC', 'Perawatan rutin yang teliti untuk memastikan AC Anda berfungsi dengan optimal.', '1'),
(3, 'Service Berkala', 'Layanan berkala untuk mencegah masalah dan menjaga performa AC dalam kondisi terbaik.', '1'),
(4, 'Cuci AC', 'Pembersihan menyeluruh untuk menjaga kebersihan dan kinerja maksimal AC Anda.', '1'),
(5, 'Penambahan Freon', 'Solusi efisien untuk menjaga kesejukan dengan menambahkan freon sesuai kebutuhan.', '1'),
(6, 'Instalasi AC', 'Profesionalisme dalam setiap langkah untuk memastikan instalasi AC yang tepat dan handal.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(155) NOT NULL,
  `sampul` varchar(155) NOT NULL,
  `role` varchar(50) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `nama_lengkap`, `email`, `username`, `password`, `sampul`, `role`, `is_active`) VALUES
(1, 'Administrator', 'administrator@gmail.com', 'admin1234', '$2y$10$U.pshYe2PRbeDS/HIFKHaOkA840N/vh71MHAZ7huevaqF6Ge91OSe', '78b7275375847b74084db99cfb705c17.png', 'Superadmin', '1'),
(2, 'Karya Gemilang', 'admin01@gmail.com', 'admin01', '$2y$10$i6o8a7bxcuMRmbln0V/fs.H3kf9e0LNjCMQUYAYDG4XpMZaB79ciy', '63e64433e1c79d4c264b9709ebffbf80.jpg', 'Admin Content', '1'),
(3, 'Admin Gemilang', 'admin.gemilang@gmail.com', 'admin.gemilang', '$2y$10$OYdsY81JXIiyw5q9wrkYxOozqRv04ZbMnV9hl8CSBnhPLKTyEsmkC', 'a6803c2a619c8e49469411fd25c69161.png', 'Admin', '1'),
(4, 'Hello World', 'helloworld@gmail.com', 'hello.world', '$2y$10$aCi9QqPT2tBfQtnfCyiBjevvcCiJo87rMFRtLgMt7E1ewYSC2VXEm', '0b02ea310c54f7ce68f5b20cadd3a75b.png', 'Admin Content', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  ADD PRIMARY KEY (`dokumentasi_id`);

--
-- Indexes for table `tb_klien`
--
ALTER TABLE `tb_klien`
  ADD PRIMARY KEY (`klien_id`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  MODIFY `dokumentasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_klien`
--
ALTER TABLE `tb_klien`
  MODIFY `klien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `layanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
