<?php
use Com\NickelIT\Colors\W3SchoolColors;

using('App.Code.Web.UI.NPage');
using('App.Code.Models.ClotheRecord');

/**
 * Created by PhpStorm.
 * User: e.nouni
 * Date: 26/09/2016
 * Time: 13:34
 */
class ListPage extends NPage
{
    /**
     * This method is invoked when the control enters 'OnLoad' stage.
     * The method raises 'OnLoad' event.
     * If you override this method, be sure to call the parent implementation
     * so that the event handlers can be invoked.
     * @param TEventParameter event parameter to be passed to the event handlers
     */
    public function onLoad($param)
    {
        parent::onLoad($param);

        $this->ColorLbx->DataSource = W3SchoolColors::colors();
        $this->ColorLbx->DataTextField = "name";
        $this->ColorLbx->DatavalueField = "hex";
        $this->ColorLbx->databind();
    }


    /**
     * @param TButton $sender
     * @param TEventParameter $param
     */
    public function addNewClotheBtnClicked($sender, $param)
    {
        $cloth = new ClotheRecord();

        $cloth->username = user()->getName();
        $cloth->title = $this->TitleTxt->Text;
        $cloth->size = $this->SizeLbx->SelectedValue;
        $cloth->color = $this->ColorLbx->SelectedValue;
        $cloth->tags = $this->TagsTxt->Text;

        $cloth->save();

        /** @var TFileUpload $fup */
        $fup = $this->PictureFup;
        $path = uploads_dir() . '/clothes/' . $cloth->clothe_id . '/' . md5($cloth->title) . '.' . file_extension($fup->getFileName());
        if (!file_exists($path))
            @mkdir(dirname($path), 0777, true);
        $fup->saveAs($path);

        $this->success('Clothe added successfully');

        redirect_page('bo.clothes.ListPage');

    }
}