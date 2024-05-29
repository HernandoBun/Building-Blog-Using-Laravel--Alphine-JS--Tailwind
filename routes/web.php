<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Hernando Bun', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'etf-ethereum-approved',
            'title' => 'ETF ETHEREUM APPROVED',
            'author' => 'Hernando Bun',
            'body' => 'Yesterday, the American Securities and Exchange Commission (SEC) approved the applications for spot Ethereum, or — to be precise — Eth, exchange-traded funds (ETFs). 
            This follows the approval of Bitcoin spot ETFs in January, marking another significant and somewhat unexpected development in the crypto asset space. This is all you need to know about the spot Eth ETFs.

            What does the approval mean?
            The SECs green light for Eth ETFs significantly broadens access to the crypto asset Ethereum for a wider audience, particularly institutional investors such as companies, 
            insurance firms, pension funds, etc. While these entities could previously have hold Eth directly, the introduction of ETFs provides various simplifications. 
            Investors are very familiar with the financial market products of ETFs.
            They are comfortable with their structure, understand their risks etc. Consequently, the potential market size for Eth will now considerable grow due to the availability of these ETFs.
            
            Which ETFs were approved?
            A total of eight ETFs received approval, namely:
            
            Grayscale Ethereum Trust
            Bitwise Ethereum ETF
            Blackrocks iShares Ethereum Trust
            VanEck Ethereum Trust
            ARK 21Shares Ethereum ETF
            Invesco Galaxy Ethereum ETF
            Fidelity Ethereum Fund
            Franklin Ethereum ETF
            The approval process we have seen yesterday mirrors that of the Bitcoin ETFs, where all applications were approved simultaneously.
            
            Why is this approval somewhat surprising?
            Historically, the SEC has been quite cautious regarding cryptocurrencies other than Bitcoin, often calling them securities. 
            Just a few weeks ago, the approval of Eth ETFs seemed somewhat off the table. 
            However, leading analysts such as Bloombergs Eric Balchunas and James Seyffart 
            recently adjusted their forecasts for approval from a 25% likelihood to 75%. 
            This super sudden and short-term shift, driven by increased interactions between the SEC and applicants after months of silence, 
            suggests a political influence.
            
            How much volume is expected for Eth ETFs?
            Predicting volume — or assets under management — is of course challenging. 
            While Bitcoin spot ETFs set numerous records, its unlikely that Eth ETFs will match these figures. Bitcoin remains the leading crypto asset by market capitalization and investor interest, 
            amongst others. As a ballpark estimate, analysts Balchunas and Seyffart estimate that Eth ETFs might capture 10 to 20% of the assets under management seen in Bitcoin ETFs.'
        ],
        [
            'id' => 2,
            'slug' => 'layer-2-potential',
            'title' => 'Layer 2 Pottential',
            'author' => 'Hernando Bun',
            'body' => 'The potential introduction of an Ethereum ETF (Exchange-Traded Fund) in the USA could have significant implications for Ethereum Layer 2 solutions.
             Here are the key points to consider:
             Increased Demand and Usage
            —Market Exposure:
            An Ethereum ETF would make it easier for institutional and retail investors to gain exposure to Ethereum without directly buying and managing ETH. 
            This could significantly increase the overall demand for Ethereum. 
            ETFs are a popular investment vehicle because they offer exposure to assets without the need for direct ownership, making it accessible to a wider range of investors.

            —Transaction Volume:
            With more people investing in Ethereum, the transaction volume on the Ethereum network is likely to increase. 
            This could lead to higher gas fees and network congestion on the Ethereum Layer 1 blockchain. 
            Historically, increased interest in Ethereum has led to spikes in gas fees, making transactions expensive and slower during peak times.

            Impact on Layer 2 Solutions
            —Scalability Needs:
            As the Ethereum network experiences higher traffic, the need for scalability solutions becomes more urgent. 
            Layer 2 solutions, which are designed to offload transactions from the main Ethereum blockchain, would become even more critical. These solutions, such as Optimistic Rollups, 
            ZK-Rollups, and sidechains, help to alleviate congestion and reduce transaction costs.

            —Adoption of Layer 2:
            Investors and users looking to avoid high gas fees might increasingly turn to Layer 2 solutions. This could lead to a surge in the adoption of Layer 2 technologies. 
            As these solutions mature, they offer faster and cheaper transactions compared to Layer 1, providing an attractive alternative for users.

            —Infrastructure Pressure:
            The infrastructure supporting Layer 2 solutions could face increased pressure. Providers of these solutions would need to scale their operations to handle the influx of users and transactions. 
            This could involve upgrading technology, increasing server capacity, and improving network resilience to ensure smooth operation.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'etf-ethereum-approved',
            'title' => 'ETF ETHEREUM APPROVED',
            'author' => 'Hernando Bun',
            'body' => 'Yesterday, the American Securities and Exchange Commission (SEC) approved the applications for spot Ethereum, or — to be precise — Eth, exchange-traded funds (ETFs). This follows the approval of Bitcoin spot ETFs in January, marking another significant and somewhat unexpected development in the crypto asset space. This is all you need to know about the spot Eth ETFs.

            What does the approval mean?
            The SECs green light for Eth ETFs significantly broadens access to the crypto asset Ethereum for a wider audience, particularly institutional investors such as companies, insurance firms, pension funds, etc. While these entities could previously have hold Eth directly, the introduction of ETFs provides various simplifications. Investors are very familiar with the financial market products of ETFs. They are comfortable with their structure, understand their risks etc. Consequently, the potential market size for Eth will now considerable grow due to the availability of these ETFs.
            
            Which ETFs were approved?
            A total of eight ETFs received approval, namely:
            
            Grayscale Ethereum Trust
            Bitwise Ethereum ETF
            Blackrocks iShares Ethereum Trust
            VanEck Ethereum Trust
            ARK 21Shares Ethereum ETF
            Invesco Galaxy Ethereum ETF
            Fidelity Ethereum Fund
            Franklin Ethereum ETF
            The approval process we have seen yesterday mirrors that of the Bitcoin ETFs, where all applications were approved simultaneously.
            
            Why is this approval somewhat surprising?
            Historically, the SEC has been quite cautious regarding cryptocurrencies other than Bitcoin, often calling them securities. Just a few weeks ago, the approval of Eth ETFs seemed somewhat off the table. However, leading analysts such as Bloomberg’s Eric Balchunas and James Seyffart recently adjusted their forecasts for approval from a 25% likelihood to 75%. This super sudden and short-term shift, driven by increased interactions between the SEC and applicants after months of silence, suggests a political influence.
            
            How much volume is expected for Eth ETFs?
            Predicting volume — or assets under management — is of course challenging. While Bitcoin spot ETFs set numerous records, it’s unlikely that Eth ETFs will match these figures. Bitcoin remains the leading crypto asset by market capitalization and investor interest, amongst others. As a ballpark estimate, analysts Balchunas and Seyffart estimate that Eth ETFs might capture 10 to 20% of the assets under management seen in Bitcoin ETFs.'
        ],
        [
            'id' => 2,
            'slug' => 'layer-2-potential',
            'title' => 'Layer 2 Pottential',
            'author' => 'Hernando Bun',
            'body' => 'The potential introduction of an Ethereum ETF (Exchange-Traded Fund) in the USA could have significant implications for Ethereum Layer 2 solutions.
             Here are the key points to consider:
             Increased Demand and Usage
            —Market Exposure:
            An Ethereum ETF would make it easier for institutional and retail investors to gain exposure to Ethereum without directly buying and managing ETH. This could significantly increase the overall demand for Ethereum. ETFs are a popular investment vehicle because they offer exposure to assets without the need for direct ownership, making it accessible to a wider range of investors.

            —Transaction Volume:
            With more people investing in Ethereum, the transaction volume on the Ethereum network is likely to increase. This could lead to higher gas fees and network congestion on the Ethereum Layer 1 blockchain. Historically, increased interest in Ethereum has led to spikes in gas fees, making transactions expensive and slower during peak times.

            Impact on Layer 2 Solutions
            —Scalability Needs:
            As the Ethereum network experiences higher traffic, the need for scalability solutions becomes more urgent. Layer 2 solutions, which are designed to offload transactions from the main Ethereum blockchain, would become even more critical. These solutions, such as Optimistic Rollups, ZK-Rollups, and sidechains, help to alleviate congestion and reduce transaction costs.

            —Adoption of Layer 2:
            Investors and users looking to avoid high gas fees might increasingly turn to Layer 2 solutions. This could lead to a surge in the adoption of Layer 2 technologies. As these solutions mature, they offer faster and cheaper transactions compared to Layer 1, providing an attractive alternative for users.

            —Infrastructure Pressure:
            The infrastructure supporting Layer 2 solutions could face increased pressure. Providers of these solutions would need to scale their operations to handle the influx of users and transactions. This could involve upgrading technology, increasing server capacity, and improving network resilience to ensure smooth operation.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/register', function () {
    return view('register');
});
