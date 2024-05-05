# Tabs

The component in question is designed to enhance webpage layout by enabling the distribution of elements in a compact and organized manner through the use of separate tabs. This tabbed interface component allows for the segregation of content into distinct sections that are easily navigable, making it possible to present a larger amount of information in a limited space without overwhelming the user.

By integrating this component, developers can significantly improve the user experience on webpages by grouping related content under individual tabs. Each tab acts as a clickable element, displaying its corresponding content without the need to navigate away from the page. This method of content organization not only simplifies the interface but also enhances the aesthetic appeal of the page, making information more accessible and easier to digest for users.

The tabbed interface is particularly useful in applications where information needs to be categorized or when multiple perspectives of data need to be presented simultaneously. For example, in a product detail page, tabs can be used to separate specifications, reviews, and FAQs, thereby allowing users to quickly switch between different types of information without scrolling through long pages.

Furthermore, this component is designed with flexibility in mind, offering customizable options for the appearance and behavior of the tabs. Developers can adjust the style, transition effects, and layout of the tabs to match the overall design of the webpage, ensuring a cohesive and branded user experience.

In summary, the tabbed interface component serves as a powerful tool for web developers seeking to create more engaging, structured, and user-friendly webpages. By facilitating the efficient organization of content into discrete, easily navigable tabs, this component not only enhances the presentation of information but also contributes to a more intuitive and satisfying user interaction with the webpage.
```php
return $page->card(
	$card->tab(
		$tab->title('General')->icon_globe(),
		...
	)
)
```
Supports the icon methods of the `FontAwesome` library. Available list of links to icons can be seen in [file at link](https://github.com/bfg-s/admin/blob/master/src/Traits/FontAwesome.php).
