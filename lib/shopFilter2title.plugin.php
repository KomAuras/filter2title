<?php

class shopFilter2titlePlugin extends shopPlugin
{
    private $for = array(
        'tip_tovara' => array(
            'suffix' => '-',
            'values' => array(
                'Кольцо' => 'Кольцо',
                'Серьги' => 'Серьги',
                'Браслет' => 'Браслет',
                'Кулон' => 'Кулон',
                'Ожерель' => 'Ожерелье',
                'Крест' => 'Крест',
                'Запонки' => 'Запонки',
                'Часы' => 'Часы',
                'Цепь' => 'Цепь',
                'Прочее' => 'Прочее',
            )
        ),
        'metall' => array(
            'suffix' => 'из',
            'values' => array(
                'Белое Золото' => 'Белого Золота',
                'Дерево' => 'Дерева',
                'Золото' => 'Золота',
                'Золото белое' => 'Золота белого',
                'Каучук' => 'Каучука',
                'Керамика' => 'Керамики',
                'Керамопластик' => 'Керамопластика',
                'Кожа' => 'Кожы',
                'Пластик' => 'Пластика',
                'Полимер' => 'Полимера',
                'Серебро' => 'Серебра',
                'Сталь' => 'Стали',
                'Стекло' => 'Стекла',
                'Ювелирный сплав' => 'Ювелирного сплава',
            )
        ),
        'vstavka' => array(
            'suffix' => 'с',
            'values' => array(
                'Авантюрин' => 'Авантюрином',
                'Агат' => 'Агатом',
                'Аквамаpин' => 'Аквамаpином',
                'Аквамарин' => 'Аквамарином',
                'Алпанит' => 'Алпанитом',
                'Алюминий' => 'Алюминием',
                'Амазонит' => 'Амазонитом',
                'Аметист' => 'Аметистом',
                'Без вставок' => '',
                'Берил' => 'Берилом',
                'Бирюза' => 'Бирюзой',
                'Бриллиант' => 'Бриллиантом',
                'Гелиотроп' => 'Гелиотропом',
                'Гематит' => 'Гематитом',
                'Гранат' => 'Гранатом',
                'Дерево' => 'Деревом',
                'Жадеит' => 'Жадеитом',
                'Жемчуг' => 'Жемчугом',
                'Золото' => 'Золотом',
                'Изумруд' => 'Изумрудом',
                'Иолит' => 'Иолитом',
                'Кальцит' => 'Кальцитом',
                'Карбон' => 'Карбоном',
                'Карнеол' => 'Карнеолом',
                'Каучук' => 'Каучуком',
                'Кварц' => 'Кварцем',
                'Керамика' => 'Керамикой',
                'Кожа' => 'Кожей',
                'Коралл' => 'Кораллом',
                'Корунд' => 'Корундом',
                'Кошачий глаз' => 'Кошачим глазом',
                'Кристалл' => 'Кристаллом',
                'Кристалл Swarovski' => 'Кристаллом Swarovski',
                'Куб. цирконий' => 'Куб. цирконием',
                'Лазурит' => 'Лазуритом',
                'Малахит' => 'Малахитом',
                'Марказит' => 'Марказитом',
                'Морганит' => 'Морганитом',
                'Нефрит' => 'Нефритом',
                'Обсидиан' => 'Обсидианом',
                'Оникс' => 'Ониксом',
                'Опал' => 'Опалом',
                'Пластик' => 'Пластиком',
                'Полимер' => 'Полимером',
                'Празиолит' => 'Празиолитом',
                'Раухтопаз' => 'Раухтопазом',
                'Раухцитрин' => 'Раухцитрином',
                'Родолит' => 'Родолитом',
                'Рубин' => 'Рубином',
                'Сапфир' => 'Сапфиром',
                'Сердолик' => 'Сердоликом',
                'Серебро' => 'Серебром',
                'Ситалл' => 'Ситаллом',
                'Смола' => 'Смолой',
                'Сталь' => 'Сталью',
                'Стекло' => 'Стеклом',
                'Султанит' => 'Султанитом',
                'Танзанит' => 'Танзанитом',
                'Текстиль' => 'Текстилем',
                'Тигровый глаз' => 'Тигровым глазом',
                'Топаз' => 'Топазом',
                'Тсаворит' => 'Тсаворитом',
                'Турмалин' => 'Турмалином',
                'Фианит' => 'Фианитом',
                'Флюорит' => 'Флюоритом',
                'Халцедон' => 'Халцедоном',
                'Хризолит' => 'Хризолитом',
                'Хризопрас' => 'Хризопрасом',
                'Хрусталь' => 'Хрусталем',
                'Циркон' => 'Цирконом',
                'Цирконий' => 'Цирконием',
                'Цитрин' => 'Цитрином',
                'Шелк' => 'Шелком',
                'Шнурок' => 'Шнуроком',
                'Шпинель' => 'Шпинелью',
                'Эмаль' => 'Эмалью',
                'Янтарь' => 'Янтарем',
                'Яшма' => 'Яшмой',
            )
        )
    );

    public function titleCategory($category)
    {
        //echo '<pre>';
        //wa_dump(wa()->getView()->getVars());
        //wa_dump(waRequest::get());
        $category = wa()->getView()->getVars('category');
        $filters = wa()->getView()->getVars('filters');
        $data = array();
        foreach ($filters as $filter) {
            if (is_array($filter['values'])) {
                foreach ($filter['values'] as $v_id => $v) {
                    if (in_array($v_id, (array)waRequest::get($filter['code']))) {
                        $data[$filter['code']][] = $v;
                    }
                }
            }
        }
        $txt = $this->buildTitle($category['name'], $data);
        if (!empty($txt)) {
            wa()->getResponse()->setTitle($txt);
        }
        //echo '</pre>';
        return;
    }

    private function buildTitle($category, $data)
    {
        $result = '';
        foreach ($this->for as $char => $char_data) {
            foreach ($data as $key => $values) {
                if ($char == $key) {
                    if (count($values)) {
                        $result .= ' ' . $char_data['suffix'];
                        $result .= ' ' . $this->implode($values, $char_data['values']);
                    }
                }
            }
        }
        if (!empty($result)) {
            return $category . $result;
        }
        return '';
    }

    private function implode($values, $replaces)
    {
        $result = '';
        $count = 0;
        foreach ($values as $value) {
            if (array_key_exists($value, $replaces)) {
                $value = $replaces[$value];
            }
            if ($count != 0 && $count != count($values) - 1) {
                $result .= ', ';
            } else if ($count > 0 && $count == count($values) - 1) {
                $result .= ' и ';
            }
            $result .= $value;
            $count++;
        }
        return $result;
    }
}
