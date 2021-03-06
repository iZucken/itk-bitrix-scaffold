<?php

namespace itcomgk\bitrix24\crm;

/**
 * Описание полей сущости Мультиполя
 *
 * @package itcomgk\bitrix24\crm
 */
class MultifieldFields
{
    const ID = 'ID';
    /**
     * Фактическое строковое значение мультиполя
     * Вид валидации определяется сущностью-обладателем
     */
    const VALUE = 'VALUE';
    /**
     * Строковый "семантический тип" значения поля,
     * в интерфейсе Битрикс мапится на внутренний словарь локализации.
     * Значение поля так-же может быть семантически обрамлено ссылкой.
     * Фактически может быть задано любое значение.
     */
    const TYPE = 'VALUE_TYPE';
}