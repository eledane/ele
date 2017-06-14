<?php
namespace Drupal\ele_direction\TwigExtension;

use Drupal\node\Entity\Node;

class NodeDirection extends \Twig_Extension {
    /**
     * Generates a list of all Twig filters that this extension defines.
     */
    public function getFunctions() {
        return [
            new \Twig_SimpleFunction('customPrevious', array($this, 'customPrevious')),
            new \Twig_SimpleFunction('customNext', array($this, 'customNext'))
        ];
    }

    /**
     * Gets a unique identifier for this Twig extension.
     */
    public function getName() {
        return 'custom.prevnextnode_extension';
    }

    /**
     * Previous node
     * @param $prevNextInfo
     * @return array|bool
     */
    public function customPrevious($prevNextInfo)
    {
        $node = Node::load($prevNextInfo['nid']);
        return $this->getNodeInformation($prevNextInfo['node_type'], $node->getCreatedTime(), '<', 'DESC');
    }

    /**
     * Next node
     * @param $prevNextInfo
     * @return array|bool
     */
    public function customNext($prevNextInfo)
    {
        $node = Node::load($prevNextInfo['nid']);
        return $this->getNodeInformation($prevNextInfo['node_type'], $node->getCreatedTime(), '>', 'ASC');
    }

    /**
     * Get current langcode
     * @return string
     */
    public function getCurrentLangcode()
    {
        return \Drupal::languageManager()->getCurrentLanguage()->getId();
    }

     /**
      * Previous or next node
      * @param $node_type
      * @param $date
      * @param $date_comparator
      * @param $sort_order
      * @return array|bool
      */
    public function getNodeInformation($node_type, $date, $date_comparator, $sort_order)
    {
        $prev_or_next = \Drupal::entityQuery('node')
            ->condition('type', $node_type)
            ->condition('status', 1)
            ->condition('created', $date, $date_comparator)
            ->sort('created', $sort_order)
            ->range(0, 1)
            ->execute()
        ;

        if(!$prev_or_next) return false;

        // Get the node itself
        $prev_or_next = Node::load(array_values($prev_or_next)[0]);
        // Get the available languages for the given node
        $available_languages = $prev_or_next->getTranslationLanguages();
        // If the current language is defined in the available languages array
        if(array_key_exists($this->getCurrentLangcode(), $available_languages)){
            // Get the translated node
            $translation = $prev_or_next->getTranslation($this->getCurrentLangcode());

            // Return the information you need, can be w/e you want.
            return [
                'title' => $translation->getTitle(),
                'id' => $translation->id(),
                'path' => $translation->toUrl()->toString()
            ];
        }

        return false;
    }
}
