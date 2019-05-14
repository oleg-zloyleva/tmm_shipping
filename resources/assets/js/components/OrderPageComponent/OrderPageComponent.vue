<template>
    <div id="order">
        <div class="container container-order">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <div class="buttons-control" id="buttons-control">
                        <button class="buttons-control__btn active" data-order="air">AIR SHIPPING FORM</button>
                        <button class="buttons-control__btn" data-order="ocean">OCEAN SHIPPING FORM</button>
                        <button class="buttons-control__btn" data-order="usspi">GROUND SHIPPING FORM</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9 col-xl-8">

                    <div class="order-block">
                        <div class="slider-order" id="slider-order">
                            <slick ref="slick" :options="slickOptions">
                                <!-- SHIPPER -->
                                <div class="slider-order__slide">
                                    <div class="slider-order__title">SHIPPER</div>
                                    <div class="checked-block">
                                        <input name="delivery" id="citizen" class="inp-checkbox" type="radio"
                                               value="citizen" v-model="delivery">
                                        <label for="citizen" class="checked-block__label">US citizen</label>
                                        <input name="delivery" id="business" class="inp-checkbox" type="radio"
                                               value="business" v-model="delivery">
                                        <label for="business" class="checked-block__label">Business</label>
                                        <input name="delivery" id="foreign" class="inp-checkbox" type="radio"
                                               value="foreign" v-model="delivery">
                                        <label for="foreign" class="checked-block__label">Foreign</label>
                                    </div>
                                    <form id="form-shipper">
                                        <div class="slider-order__body">
                                            <div class="body-left">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        TID/SS#:
                                                        <input name="tid" class="slider-order__inp"
                                                               v-model="sendOrderForm.shipper.tid">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        First name:
                                                        <input name="firstName" class="slider-order__inp"
                                                               v-model="sendOrderForm.shipper.firstName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Second name:
                                                        <input name="secondName" class="slider-order__inp"
                                                               v-model="sendOrderForm.shipper.secondName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Address:
                                                        <input name="address" class="slider-order__inp"
                                                               v-model="sendOrderForm.shipper.address">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        E-mail:
                                                        <input name="email" class="slider-order__inp"
                                                               v-model="sendOrderForm.shipper.email">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Phone:
                                                        <input name="phone" class="slider-order__inp only-number"
                                                               v-model="sendOrderForm.shipper.phone">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Fax:
                                                        <input name="fax" class="slider-order__inp"
                                                               v-model="sendOrderForm.shipper.fax">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="body-right">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        City:
                                                        <input name="city" class="slider-order__inp"
                                                               v-model="sendOrderForm.shipper.city">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        State (US only):
                                                        <select name="state" class="slider-order__select select-order"
                                                                v-model="sendOrderForm.shipper.state">
                                                            <option value="">Choose country</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Province:
                                                        <input name="province" class="slider-order__inp"
                                                               v-model="sendOrderForm.shipper.province">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Country:
                                                        <select name="country" class="slider-order__select select-order"
                                                                v-model="sendOrderForm.shipper.country">
                                                            <option value="">Choose country</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        ZIP:
                                                        <input name="zip" class="slider-order__inp only-number"
                                                               maxlength="10" v-model="sendOrderForm.shipper.zip">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="body-bottom">
                                                <div class="body-bottom__upload">Please, upload you ID photo</div>

                                                <div class="upload-file-container">
                                                    <div class="upload-file-container__text">
                                                        <span class="upload-file-container__btn">Choose file</span>
                                                        <input type="file" class="upload-file-container__photo"
                                                               @change="uploadFile">
                                                    </div>
                                                    <div class="upload-file-container__image-demo">
                                                        <img id="image-demo" src="#" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- CONSIGNEE -->
                                <div class="slider-order__slide">
                                    <div class="slider-order__title">CONSIGNEE</div>
                                    <form id="form-consignee">
                                        <div class="slider-order__body">
                                            <div class="body-left">
                                                <!--<div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        TID/SS#:
                                                        <input name="tid" class="slider-order__inp">
                                                    </label>
                                                </div>-->
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        First name:
                                                        <input name="firstName" class="slider-order__inp"
                                                               v-model="sendOrderForm.consignee.firstName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Second name:
                                                        <input name="secondName" class="slider-order__inp"
                                                               v-model="sendOrderForm.consignee.secondName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Address:
                                                        <input name="address" class="slider-order__inp"
                                                               v-model="sendOrderForm.consignee.address">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        E-mail:
                                                        <input name="email" class="slider-order__inp"
                                                               v-model="sendOrderForm.consignee.email">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Phone:
                                                        <input name="phone" class="slider-order__inp only-number"
                                                               v-model="sendOrderForm.consignee.phone">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Fax:
                                                        <input name="fax" class="slider-order__inp"
                                                               v-model="sendOrderForm.consignee.fax">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="body-right">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        City:
                                                        <input name="city" class="slider-order__inp"
                                                               v-model="sendOrderForm.consignee.city">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        State (US only):
                                                        <select name="state" class="slider-order__select select-order"
                                                                v-model="sendOrderForm.consignee.state">
                                                            <option value="">Choose country</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Province:
                                                        <input name="province" class="slider-order__inp"
                                                               v-model="sendOrderForm.consignee.province">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Country:
                                                        <select name="country" class="slider-order__select select-order"
                                                                v-model="sendOrderForm.consignee.country">
                                                            <option value="">Choose country</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        ZIP:
                                                        <input name="zip" class="slider-order__inp only-number"
                                                               maxlength="10" v-model="sendOrderForm.consignee.zip">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- NOTIFY PARTY -->
                                <div class="slider-order__slide">
                                    <div class="slider-order__title">NOTIFY PARTY</div>
                                    <form id="form-notify-party">
                                        <div class="slider-order__body-left">
                                            <div class="body-left">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-title">
                                                        Notify Party:
                                                        <select name="notifyParty"
                                                                class="slider-order__select select-order"
                                                                v-model="sendOrderForm.notifyParty.notifyParty">
                                                            <option value="">Choose country</option>
                                                        </select>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider-order__body">
                                            <div class="body-left">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        First name:
                                                        <input name="firstName" class="slider-order__inp"
                                                               v-model="sendOrderForm.notifyParty.firstName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Second name:
                                                        <input name="secondName" class="slider-order__inp"
                                                               v-model="sendOrderForm.notifyParty.secondName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Address:
                                                        <input name="address" class="slider-order__inp"
                                                               v-model="sendOrderForm.notifyParty.address">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="body-right">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        City:
                                                        <input name="city" class="slider-order__inp"
                                                               v-model="sendOrderForm.notifyParty.city">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        State (US only):
                                                        <select name="state" class="slider-order__select select-order"
                                                                v-model="sendOrderForm.notifyParty.state">
                                                            <option value="">Choose country</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Province:
                                                        <input name="province" class="slider-order__inp"
                                                               v-model="sendOrderForm.notifyParty.province">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Country:
                                                        <select name="country"
                                                                class="slider-order__select select-order"
                                                                v-model="sendOrderForm.notifyParty.country">
                                                            <option value="">Choose country</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        ZIP:
                                                        <input name="zip" class="slider-order__inp only-number"
                                                               maxlength="10"
                                                               v-model="sendOrderForm.notifyParty.zip">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- DESCRIPTION -->
                                <div class="slider-order__slide">
                                    <div v-if="vehicleCheck">
                                        <div class="slider-order__title">DESCRIPTION OF GOODS</div>
                                        <div>
                                            Type of goods:
                                            <div class="checked-block">
                                                <input name="delivery" id="vehicle" class="inp-checkbox" type="radio"
                                                       value="vehicle" v-model="description">
                                                <label for="vehicle" class="checked-block__label">Vehicle</label>
                                                <input name="delivery" id="other" class="inp-checkbox" type="radio"
                                                       value="other" v-model="description">
                                                <label for="other" class="checked-block__label">Other</label>
                                            </div>
                                        </div>
                                        <form id="form-description-of-goods">
                                            <div class="slider-order__body-center">
                                                <div class="body-center">
                                                    <div class="slider-order__row">
                                                        <div class="usd-title">USD VALUE</div>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <span class="slider-order__number">1</span>
                                                        <input class="slider-order__inp slider-order__inp-desc"
                                                               v-model="sendOrderForm.descriptionOfGoods.description_1">
                                                        <input class="slider-order__inp slider-order__inp-usd only-number"
                                                               maxlength="10"
                                                               v-model="sendOrderForm.descriptionOfGoods.descriptionValue_1">
                                                        <span class="dollar">&dollar;</span>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <span class="slider-order__number">2</span>
                                                        <input class="slider-order__inp slider-order__inp-desc"
                                                               v-model="sendOrderForm.descriptionOfGoods.description_2">
                                                        <input class="slider-order__inp slider-order__inp-usd only-number"
                                                               maxlength="10"
                                                               v-model="sendOrderForm.descriptionOfGoods.descriptionValue_2">
                                                        <span class="dollar">&dollar;</span>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <span class="slider-order__number">3</span>
                                                        <input class="slider-order__inp slider-order__inp-desc"
                                                               v-model="sendOrderForm.descriptionOfGoods.description_3">
                                                        <input class="slider-order__inp slider-order__inp-usd only-number"
                                                               maxlength="10"
                                                               v-model="sendOrderForm.descriptionOfGoods.descriptionValue_3">
                                                        <span class="dollar">&dollar;</span>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <span class="slider-order__number">4</span>
                                                        <input class="slider-order__inp slider-order__inp-desc"
                                                               v-model="sendOrderForm.descriptionOfGoods.description_4">
                                                        <input class="slider-order__inp slider-order__inp-usd only-number"
                                                               maxlength="10"
                                                               v-model="sendOrderForm.descriptionOfGoods.descriptionValue_4">
                                                        <span class="dollar">&dollar;</span>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <span class="slider-order__number">5</span>
                                                        <input class="slider-order__inp slider-order__inp-desc"
                                                               v-model="sendOrderForm.descriptionOfGoods.description_5">
                                                        <input class="slider-order__inp slider-order__inp-usd only-number"
                                                               maxlength="10"
                                                               v-model="sendOrderForm.descriptionOfGoods.descriptionValue_5">
                                                        <span class="dollar">&dollar;</span>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <span class="slider-order__number">6</span>
                                                        <input class="slider-order__inp slider-order__inp-desc"
                                                               v-model="sendOrderForm.descriptionOfGoods.description_6">
                                                        <input class="slider-order__inp slider-order__inp-usd only-number"
                                                               maxlength="10"
                                                               v-model="sendOrderForm.descriptionOfGoods.descriptionValue_6">
                                                        <span class="dollar">&dollar;</span>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <span class="slider-order__number">7</span>
                                                        <input class="slider-order__inp slider-order__inp-desc"
                                                               v-model="sendOrderForm.descriptionOfGoods.description_7">
                                                        <input class="slider-order__inp slider-order__inp-usd only-number"
                                                               maxlength="10"
                                                               v-model="sendOrderForm.descriptionOfGoods.descriptionValue_7">
                                                        <span class="dollar">&dollar;</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="itinerary-block">
                                                <span class="itinerary">ITINERARY</span>
                                                <label class="slider-order__label slider-order__label-required slider-order__label-from">
                                                    From:
                                                    <input name="from" class="slider-order__inp"
                                                           v-model="sendOrderForm.descriptionOfGoods.from">
                                                </label>
                                                <label class="slider-order__label slider-order__label-required slider-order__label-to">
                                                    To:
                                                    <input name="to" class="slider-order__inp"
                                                           v-model="sendOrderForm.descriptionOfGoods.to">
                                                </label>
                                            </div>
                                            <div class="additional-block">
                                                <span class="additional">Additional fees and charges:</span>
                                                <span class="insurance-text">Insurance</span>
                                                <input name="insurance" id="insurance-air" class="inp-checkbox"
                                                       type="checkbox"
                                                       v-model="sendOrderForm.descriptionOfGoods.insurance">
                                                <label for="insurance-air" class="checked-block__label"></label>
                                            </div>
                                        </form>
                                    </div>
                                    <div v-if="!vehicleCheck">
                                        <div class="slider-order__title">VEHICLE</div>
                                        <div>
                                            Type of goods:
                                            <div class="checked-block">
                                                <input name="delivery" id="vehicle2" class="inp-checkbox" type="radio"
                                                       value="vehicle" v-model="description">
                                                <label for="vehicle2" class="checked-block__label">Vehicle</label>
                                                <input name="delivery" id="other2" class="inp-checkbox" type="radio"
                                                       value="other" v-model="description">
                                                <label for="other2" class="checked-block__label">Other</label>
                                            </div>
                                        </div>
                                        <form id="form-vehicle">
                                            <div class="slider-order__body">
                                                <div class="body-left body-vehicle">
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            Year:
                                                            <input name="year" class="slider-order__inp only-number"
                                                                   v-model="sendOrderForm.vehicle.year">
                                                        </label>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            Make:
                                                            <input name="make" class="slider-order__inp"
                                                                   v-model="sendOrderForm.vehicle.make">
                                                        </label>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            Model:
                                                            <input name="model" class="slider-order__inp"
                                                                   v-model="sendOrderForm.vehicle.model">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="body-right">
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            Body:
                                                            <input name="body" class="slider-order__inp"
                                                                   v-model="sendOrderForm.vehicle.body">
                                                        </label>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            Colour:
                                                            <input name="colour" class="slider-order__inp"
                                                                   v-model="sendOrderForm.vehicle.colour">
                                                        </label>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            6 Last VIN#:
                                                            <input name="vin" class="slider-order__inp"
                                                                   v-model="sendOrderForm.vehicle.vin">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-order__row slider-order__row-center">
                                                <label class="slider-order__label slider-order__label-required slider-order__label-vehicle">
                                                    Value of vehicle:
                                                    <input name="valueOfVehicle"
                                                           class="slider-order__inp slider-order__inp-vehicle only-number"
                                                           v-model="sendOrderForm.vehicle.valueVehicle">
                                                    <span class="dollar">&dollar;</span>
                                                </label>
                                            </div>
                                            <div class="additional-block">
                                                <span class="additional">Additional fees and charges:</span>
                                                <span class="insurance-text">Insurance (1.5%)</span>
                                                <input name="insurance" id="insurance-ocean" class="inp-checkbox"
                                                       type="checkbox" v-model="sendOrderForm.vehicle.insurance">
                                                <label for="insurance-ocean" class="checked-block__label"></label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- SEND DOCUMENTS TO -->
                                <div class="slider-order__slide">
                                    <form id="form-send-documents-to">
                                        <div class="slider-order__title">SEND DOCUMENTS TO:</div>
                                        <div class="slider-order__body-left">
                                            <div class="body-left">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-title">
                                                        Air Waybill:
                                                        <select name="airWaybill"
                                                                class="slider-order__select select-order"
                                                                v-model="sendOrderForm.sendDocuments.waybill">
                                                            <option value="">Choose country</option>
                                                        </select>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider-order__body">
                                            <div class="body-left">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        First name:
                                                        <input name="firstName" class="slider-order__inp"
                                                               v-model="sendOrderForm.sendDocuments.firstName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Second name:
                                                        <input name="secondName" class="slider-order__inp"
                                                               v-model="sendOrderForm.sendDocuments.secondName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Address:
                                                        <input name="address" class="slider-order__inp"
                                                               v-model="sendOrderForm.sendDocuments.address">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="body-right">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        City:
                                                        <input name="city" class="slider-order__inp"
                                                               v-model="sendOrderForm.sendDocuments.city">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        State (US only):
                                                        <select name="state" class="slider-order__select select-order"
                                                                v-model="sendOrderForm.sendDocuments.state">
                                                            <option value="">Choose country</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Province:
                                                        <input name="province" class="slider-order__inp"
                                                               v-model="sendOrderForm.sendDocuments.province">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Country:
                                                        <select name="country"
                                                                class="slider-order__select select-order"
                                                                v-model="sendOrderForm.sendDocuments.country">
                                                            <option value="">Choose country</option>
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        ZIP:
                                                        <input name="zip" class="slider-order__inp only-number"
                                                               maxlength="10" v-model="sendOrderForm.sendDocuments.zip">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- USPPI -->
                                <div class="slider-order__slide">
                                    <div class="usspi-block" id="usspi-block">
                                        <div class="usspi-block__title">
                                            WRITTEN AUTHORIZATION TO PREPARE OR <br>TRANSMIT SHIPPER’S EXPORT
                                            INFORMATION
                                        </div>
                                        <form id="usspi-form">
                                            <div class="usspi-block__content">
                                                <div class="content-authorize">
                                                    I,
                                                    <input class="inp-content" name="firstExporterName">
                                                    <input class="inp-content" name="secondExporterName">, authorize
                                                </div>
                                                TMM international, to act as forwarding agent for export control and
                                                customs
                                                purposes and to sign any Shipper’s Export Declaration (SED), or transmit
                                                such export
                                                information electronically, which may be required by law or regulation
                                                in connection
                                                with the exportation or transportation of any merchandise on behalf of
                                                said U.S.
                                                Principal Party in Interest. The U.S. Principal Party in Interest
                                                certifies that
                                                necessary and proper documentation to accurately complete the SED or
                                                transmit the
                                                information electronically is and will be provided to the said
                                                forwarding Agent. The
                                                U.S. Principal Party in Interest further understands that civil and
                                                criminal
                                                penalties may be imposed for making false or fraudulent statements or
                                                for the
                                                violation of any United State laws or regulations on exportation and
                                                agrees to be
                                                bound by all statements of said agent based upon information or
                                                documentation
                                                provided by exporter to said agent.
                                                <div class="content-signature">
                                                    <label class="label-content">
                                                        Signature:
                                                        <input class="inp-content inp-signature" name="signatureFirst">*<input
                                                            class="inp-content" name="signatureSecond">
                                                    </label>
                                                </div>
                                                <div class="content-print">
                                                    <label class="label-content">
                                                        Print Name:
                                                        <input class="inp-content inp-print" name="printName">
                                                    </label>
                                                </div>
                                                <div class="content-ein">
                                                    <label class="label-content">
                                                        E.I.N. (TAX ID):
                                                        <input class="inp-content inp-ein" name="einTaxId">
                                                    </label>
                                                </div>
                                                <div class="content-title">
                                                    <label class="label-content">
                                                        Title:
                                                        <input class="inp-content inp-title" name="titleFirst">*<input
                                                            class="inp-content" name="titleSecond">
                                                    </label>
                                                </div>
                                                <div class="content-date">
                                                    <label class="label-content">
                                                        Date:
                                                        <input class="inp-content inp-date" name="dateFirst">*<input
                                                            class="inp-content" name="dateSecond">
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="fppi-block" id="fppi-block">
                                        <div class="fppi-block__title">
                                            EXPORT WRITTEN AUTHORIZATION FOR F.P.P.I.<br>
                                            (Foreign Principal Party in Interest)
                                        </div>
                                        <div class="fppi-block__subtitle">
                                            WRITTEN AUTHORIZATION<br>
                                            TO PREPARE OR TRANSMIT ELECTRONIC EXPORT INFORMATION (EEI)
                                        </div>

                                        <form id="fppi-form">
                                            <!--<div class="usspi-block__content">
                                                <div class="content-authorize">
                                                    I,
                                                    <input class="inp-content" name="firstExporterName">
                                                    <input class="inp-content" name="secondExporterName">, authorize
                                                </div>
                                                TMM international, to act as forwarding agent for export control and customs
                                                purposes and to sign any Shipper’s Export Declaration (SED), or transmit such export
                                                information electronically, which may be required by law or regulation in connection
                                                with the exportation or transportation of any merchandise on behalf of said U.S.
                                                Principal Party in Interest. The U.S. Principal Party in Interest certifies that
                                                necessary and proper documentation to accurately complete the SED or transmit the
                                                information electronically is and will be provided to the said forwarding Agent. The
                                                U.S. Principal Party in Interest further understands that civil and criminal
                                                penalties may be imposed for making false or fraudulent statements or for the
                                                violation of any United State laws or regulations on exportation and agrees to be
                                                bound by all statements of said agent based upon information or documentation
                                                provided by exporter to said agent.
                                                <div class="content-signature">
                                                    <label class="label-content">
                                                        Signature:
                                                        <input class="inp-content inp-signature" name="signatureFirst">*<input
                                                            class="inp-content" name="signatureSecond">
                                                    </label>
                                                </div>
                                                <div class="content-print">
                                                    <label class="label-content">
                                                        Print Name:
                                                        <input class="inp-content inp-print" name="printName">
                                                    </label>
                                                </div>
                                                <div class="content-ein">
                                                    <label class="label-content">
                                                        E.I.N. (TAX ID):
                                                        <input class="inp-content inp-ein" name="einTaxId">
                                                    </label>
                                                </div>
                                                <div class="content-title">
                                                    <label class="label-content">
                                                        Title:
                                                        <input class="inp-content inp-title" name="titleFirst">*<input
                                                            class="inp-content" name="titleSecond">
                                                    </label>
                                                </div>
                                                <div class="content-date">
                                                    <label class="label-content">
                                                        Date:
                                                        <input class="inp-content inp-date" name="dateFirst">*<input
                                                            class="inp-content" name="dateSecond">
                                                    </label>
                                                </div>
                                            </div>-->
                                        </form>
                                    </div>
                                </div>
                                <!-- COMMENTS -->
                                <div class="slider-order__slide">
                                    <div class="slider-order__title">DESCRIPTION OF GOODS</div>
                                    <form id="form-comment">
                                        <div class="slider-order__comment">
                                            <label for="comment">Comment</label>
                                            <textarea name="comment" class="slider-order__textarea"
                                                      id="comment" v-model="sendOrderForm.comments.comment"></textarea>
                                        </div>
                                    </form>
                                    <div class="slider-order__row slider-order__row-center">
                                        <input id="agree-checked" class="inp-checkbox" type="checkbox">
                                        <label for="agree-checked" class="checked-block__label">
                                            I have read and agree with
                                            <a class="slider-order__href" href="#">
                                                rules &amp; regulations
                                            </a>
                                        </label>
                                        <span class="additional"></span>
                                    </div>
                                    <div class="slider-order__row">
                                        <button class="btn-continue btn-disabled" id="btn-continue" @click="sendForms"
                                                disabled>
                                            Continue
                                        </button>
                                    </div>
                                    <div class="required-fields" id="required-fields">Fill in required fields</div>
                                </div>
                            </slick>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import Slick from 'vue-slick';

    export default {
        name: "OrderPageComponent",
        components: {Slick},
        data() {
            return {
                delivery: 'citizen',
                description: 'other',
                vehicleCheck: true,
                businessCheck: true,
                citizenCheck: true,
                foreignCheck: true,

                sendOrderForm: {
                    shipper: {
                        tid: '',
                        firstName: '',
                        secondName: '',
                        address: '',
                        email: '',
                        phone: '',
                        fax: '',
                        city: '',
                        state: '',
                        province: '',
                        country: '',
                        zip: ''
                    },
                    consignee: {
                        firstName: '',
                        secondName: '',
                        address: '',
                        email: '',
                        phone: '',
                        fax: '',
                        city: '',
                        state: '',
                        province: '',
                        country: '',
                        zip: ''
                    },
                    notifyParty: {
                        notifyParty: '',
                        firstName: '',
                        secondName: '',
                        address: '',
                        city: '',
                        state: '',
                        province: '',
                        country: '',
                        zip: ''
                    },
                    descriptionOfGoods: {
                        description_1: '',
                        descriptionValue_1: '',
                        description_2: '',
                        descriptionValue_2: '',
                        description_3: '',
                        descriptionValue_3: '',
                        description_4: '',
                        descriptionValue_4: '',
                        description_5: '',
                        descriptionValue_5: '',
                        description_6: '',
                        descriptionValue_6: '',
                        description_7: '',
                        descriptionValue_7: '',
                        from: '',
                        to: '',
                        insurance: ''
                    },
                    vehicle: {
                        year: '',
                        make: '',
                        model: '',
                        body: '',
                        colour: '',
                        vin: '',
                        valueVehicle: '',
                        insurance: ''
                    },
                    sendDocuments: {
                        waybill: '',
                        firstName: '',
                        secondName: '',
                        address: '',
                        city: '',
                        state: '',
                        province: '',
                        country: '',
                        zip: ''
                    },
                    usppi: {},
                    fppi: {},
                    comments: {
                        comment: ''
                    }
                },

                slickOptions: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '<button class="slider-order__arrow-prev" id="arrow-prev">Back</button>',
                    nextArrow: '<button class="slider-order__arrow-next" id="arrow-next">Next</button>',
                    dots: true,
                    arrows: true,
                    infinite: false,
                    draggable: false,
                    customPaging: function (slider, i) {
                        let $dots = ['Shipper', 'Consignee', 'Notify', 'Description', 'Title', 'USPPI', 'Comments'];
                        return $dots[i];
                    }
                }
            };
        },
        mounted() {
            // console.log(this.delivery);
        },
        methods: {
            sendForms() {
                console.log('formOrderSend', this.sendOrderForm);
            },
            uploadFile(el) {

                // console.log(el.target);
                // $("#imgInput").change(function () {
                this.readURL(el.target);
                // });
            },
            readURL(input) {

                console.log(input.files);
                console.log(input.files[0]);

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#image-demo').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            },

            next() {
                this.$refs.slick.next();
            },
            prev() {
                this.$refs.slick.prev();
            },
            reInit() {
                this.$nextTick(() => {
                    this.$refs.slick.reSlick();
                });
            }
        },
        watch: {
            delivery(value) {
                console.log(value);
            },
            description(value) {
                console.log(value);
                this.vehicleCheck = !this.vehicleCheck;
                this.description = value;
            }
        }
    }
</script>