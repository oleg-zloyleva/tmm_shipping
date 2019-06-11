<template>
    <div id="order">
        <div class="container container-order">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <div class="buttons-control" id="buttons-control">
                        <label for="air" class="buttons-control__btn active">
                            <input type="radio" name="transport" value="air"
                                   id="air" v-model="transport">
                            AIR SHIPPING FORM
                        </label>
                        <label for="ocean" class="buttons-control__btn">
                            <input type="radio" name="transport" value="ocean" id="ocean"
                                   v-model="transport">
                            OCEAN SHIPPING FORM
                        </label>
                        <label for="ground" class="buttons-control__btn">
                            <input type="radio" name="transport" value="ground" id="ground"
                                   v-model="transport">
                            GROUND SHIPPING FORM
                        </label>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9 col-xl-8">
                    <div class="order-block">
                        <div class="slider-order" id="slider-order">
                            <slick ref="slick" :options="slickOptions">
                                <!-- SHIPPER -->
                                <div class="slider-order__slide slide-1">
                                    <div class="slider-order__title">SHIPPER</div>
                                    <div class="checked-block">
                                        <input name="delivery" id="citizen" class="inp-checkbox" type="radio"
                                               value="citizen" v-model="delivery">
                                        <label for="citizen" class="checked-block__label">US citizen</label>
                                        <input name="delivery" id="business" class="inp-checkbox" type="radio"
                                               value="business" v-model="delivery">
                                        <label for="business" class="checked-block__label">US business</label>
                                        <input name="delivery" id="foreign" class="inp-checkbox" type="radio"
                                               value="foreign" v-model="delivery">
                                        <label for="foreign" class="checked-block__label">Foreign</label>
                                    </div>
                                    <form id="form-shipper" @submit.prevent="isValidForms">
                                        <div class="slider-order__body">
                                            <div class="body-left">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        {{ einTitle }}:
                                                        <input name="ein"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('ein')}"
                                                               v-model="sendOrderForm.shipper.ein">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        First name:
                                                        <input name="firstName"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('firstName')}"
                                                               v-model="sendOrderForm.shipper.firstName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Second name:
                                                        <input name="secondName"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('secondName')}"
                                                               v-model="sendOrderForm.shipper.secondName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Address:
                                                        <input name="address"
                                                               class="slider-order__inp"
                                                               v-model="sendOrderForm.shipper.address">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        E-mail:
                                                        <input name="email"
                                                               class="slider-order__inp"
                                                               v-validate="'required|email'"
                                                               :class="{'required': errors.has('email')}"
                                                               v-model="sendOrderForm.shipper.email">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Phone:
                                                        <input name="phone"
                                                               class="slider-order__inp only-number"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('phone')}"
                                                               v-model="sendOrderForm.shipper.phone">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Fax:
                                                        <input name="fax"
                                                               class="slider-order__inp"
                                                               v-model="sendOrderForm.shipper.fax">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="body-right">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        City:
                                                        <input name="city"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('city')}"
                                                               v-model="sendOrderForm.shipper.city">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        State (US only):
                                                        <select name="state"
                                                                class="slider-order__select select-order"
                                                                v-model="sendOrderForm.shipper.state">
                                                            <option value="">Choose state</option>
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
                                                        <select name="country"
                                                                class="slider-order__select select-order"
                                                                v-validate="'required'"
                                                                :class="{'required': errors.has('country')}"
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
                                            <div class="body-bottom" v-if="foreignCheck">
                                                <div class="body-bottom__upload">Please, upload you ID photo</div>
                                                <div class="upload-file-container">
                                                    <div class="upload-file-container__text">
                                                        <span class="upload-file-container__btn">Choose file</span>
                                                        <input type="file" name="shipperUploadFile"
                                                               class="upload-file-container__photo"
                                                               @change="uploadFileShipper">
                                                    </div>
                                                    <div class="upload-file-container__image-demo">
                                                        <img class="image-demo" src="#" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- CONSIGNEE -->
                                <div class="slider-order__slide slide-2">
                                    <div class="slider-order__title">CONSIGNEE</div>
                                    <form id="form-consignee" @submit.prevent="isValidForms">
                                        <div class="slider-order__body">
                                            <div class="body-left">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        First name:
                                                        <input name="firstNameCon"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('firstNameCon')}"
                                                               v-model="sendOrderForm.consignee.firstName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Second name:
                                                        <input name="secondNameCon"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('secondNameCon')}"
                                                               v-model="sendOrderForm.consignee.secondName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Address:
                                                        <input name="addressCon"
                                                               class="slider-order__inp"
                                                               v-model="sendOrderForm.consignee.address">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        E-mail:
                                                        <input name="emailCon"
                                                               class="slider-order__inp"
                                                               v-validate="'required|email'"
                                                               :class="{'required': errors.has('emailCon')}"
                                                               v-model="sendOrderForm.consignee.email">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Phone:
                                                        <input name="phoneCon"
                                                               class="slider-order__inp only-number"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('phoneCon')}"
                                                               v-model="sendOrderForm.consignee.phone">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        Fax:
                                                        <input name="fax"
                                                               class="slider-order__inp"
                                                               v-model="sendOrderForm.consignee.fax">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="body-right">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        City:
                                                        <input name="cityCon"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('cityCon')}"
                                                               v-model="sendOrderForm.consignee.city">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        State (US only):
                                                        <select name="state" class="slider-order__select select-order"
                                                                v-model="sendOrderForm.consignee.state">
                                                            <option value="">Choose state</option>
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
                                                        <select name="countryCon"
                                                                class="slider-order__select select-order"
                                                                v-validate="'required'"
                                                                :class="{'required': errors.has('countryCon')}"
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
                                <div class="slider-order__slide slide-3">
                                    <div class="slider-order__title">NOTIFY PARTY</div>
                                    <form id="form-notify-party" @submit.prevent="isValidForms">
                                        <div class="slider-order__body-left">
                                            <div class="body-left">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-title slider-order__label-required">
                                                        Notify Party:
                                                        <select name="notifyParty"
                                                                class="slider-order__select select-order"
                                                                v-validate="'required'"
                                                                :class="{'required': errors.has('notifyParty')}"
                                                                v-model="sendOrderForm.notifyParty.notifyParty">
                                                            <option value="">Choose</option>
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
                                                        <input name="firstNameNot"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('firstNameNot')}"
                                                               v-model="sendOrderForm.notifyParty.firstName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Second name:
                                                        <input name="secondNameNot"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('secondNameNot')}"
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
                                                        <input name="cityNot"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('cityNot')}"
                                                               v-model="sendOrderForm.notifyParty.city">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        State (US only):
                                                        <select name="state"
                                                                class="slider-order__select select-order"
                                                                v-model="sendOrderForm.notifyParty.state">
                                                            <option value="">Choose state</option>
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
                                                        <select name="countryNot"
                                                                class="slider-order__select select-order"
                                                                v-validate="'required'"
                                                                :class="{'required': errors.has('countryNot')}"
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
                                <div class="slider-order__slide slide-4">
                                    <div v-if="!vehicleCheck">
                                        <div class="slider-order__title">DESCRIPTION OF GOODS</div>
                                        <div>
                                            Type of goods:
                                            <div class="checked-block">
                                                <input name="description" id="other" class="inp-checkbox" type="radio"
                                                       value="other" v-model="description">
                                                <label for="other" class="checked-block__label">Other</label>
                                                <input name="description" id="vehicle" class="inp-checkbox" type="radio"
                                                       value="vehicle" v-model="description">
                                                <label for="vehicle" class="checked-block__label">Vehicle</label>
                                            </div>
                                        </div>
                                        <form id="form-description-of-goods" @submit.prevent="isValidForms">
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
                                                    <input name="itineraryFrom"
                                                           class="slider-order__inp"
                                                           v-validate="'required'"
                                                           :class="{'required': errors.has('itineraryFrom')}"
                                                           v-model="sendOrderForm.descriptionOfGoods.from">
                                                </label>
                                                <label class="slider-order__label slider-order__label-required slider-order__label-to">
                                                    To:
                                                    <input name="itineraryTo"
                                                           class="slider-order__inp"
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
                                    <div v-if="vehicleCheck">
                                        <div class="slider-order__title">VEHICLE</div>
                                        <div>
                                            Type of goods:
                                            <div class="checked-block">
                                                <input name="description" id="other2" class="inp-checkbox" type="radio"
                                                       value="other" v-model="description">
                                                <label for="other2" class="checked-block__label">Other</label>
                                                <input name="description" id="vehicle2" class="inp-checkbox"
                                                       type="radio"
                                                       value="vehicle" v-model="description">
                                                <label for="vehicle2" class="checked-block__label">Vehicle</label>
                                            </div>
                                        </div>
                                        <form id="form-vehicle" @submit.prevent="isValidForms">
                                            <div class="slider-order__body">
                                                <div class="body-left body-vehicle">
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            Year:
                                                            <input name="year"
                                                                   class="slider-order__inp only-number"
                                                                   v-validate="'required'"
                                                                   :class="{'required': errors.has('year')}"
                                                                   v-model="sendOrderForm.vehicle.year">
                                                        </label>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            Make:
                                                            <input name="make"
                                                                   class="slider-order__inp"
                                                                   v-validate="'required'"
                                                                   :class="{'required': errors.has('make')}"
                                                                   v-model="sendOrderForm.vehicle.make">
                                                        </label>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            Model:
                                                            <input name="model"
                                                                   class="slider-order__inp"
                                                                   v-validate="'required'"
                                                                   :class="{'required': errors.has('model')}"
                                                                   v-model="sendOrderForm.vehicle.model">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="body-right">
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            Body:
                                                            <input name="body"
                                                                   class="slider-order__inp"
                                                                   v-validate="'required'"
                                                                   :class="{'required': errors.has('body')}"
                                                                   v-model="sendOrderForm.vehicle.body">
                                                        </label>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            Colour:
                                                            <input name="colour"
                                                                   class="slider-order__inp"
                                                                   v-validate="'required'"
                                                                   :class="{'required': errors.has('colour')}"
                                                                   v-model="sendOrderForm.vehicle.colour">
                                                        </label>
                                                    </div>
                                                    <div class="slider-order__row">
                                                        <label class="slider-order__label slider-order__label-required">
                                                            6 Last VIN#:
                                                            <input name="vin"
                                                                   class="slider-order__inp"
                                                                   v-validate="'required'"
                                                                   :class="{'required': errors.has('vin')}"
                                                                   v-model="sendOrderForm.vehicle.vin">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slider-order__row slider-order__row-center">
                                                <label class="slider-order__label slider-order__label-required slider-order__label-vehicle">
                                                    Value of vehicle:
                                                    <input name="valueVehicle"
                                                           class="slider-order__inp slider-order__inp-vehicle only-number"
                                                           v-validate="'required'"
                                                           :class="{'required': errors.has('valueVehicle')}"
                                                           v-model="sendOrderForm.vehicle.valueVehicle">
                                                    <span class="dollar">&dollar;</span>
                                                </label>
                                            </div>
                                            <div class="additional-block">
                                                <span class="additional">Additional fees and charges:</span>
                                                <span class="insurance-text">Insurance (1%)</span>
                                                <input name="insurance" id="insurance-ocean" class="inp-checkbox"
                                                       type="checkbox" v-model="sendOrderForm.vehicle.insurance">
                                                <label for="insurance-ocean" class="checked-block__label"></label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- SEND DOCUMENTS TO -->
                                <div class="slider-order__slide slide-5">
                                    <form id="form-send-documents-to" @submit.prevent="isValidForms">
                                        <div class="slider-order__title">SEND DOCUMENTS TO:</div>
                                        <div class="slider-order__body-left">
                                            <div class="body-left">
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-title">
                                                        Air Waybill:
                                                        <select name="airWaybill"
                                                                class="slider-order__select select-order"
                                                                v-model="sendOrderForm.sendDocuments.waybill">
                                                            <option value="">Choose</option>
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
                                                        <input name="firstNameDoc"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('firstNameDoc')}"
                                                               v-model="sendOrderForm.sendDocuments.firstName">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label slider-order__label-required">
                                                        Second name:
                                                        <input name="secondNameDoc"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('secondNameDoc')}"
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
                                                        <input name="cityDoc"
                                                               class="slider-order__inp"
                                                               v-validate="'required'"
                                                               :class="{'required': errors.has('cityDoc')}"
                                                               v-model="sendOrderForm.sendDocuments.city">
                                                    </label>
                                                </div>
                                                <div class="slider-order__row">
                                                    <label class="slider-order__label">
                                                        State (US only):
                                                        <select name="state" class="slider-order__select select-order"
                                                                v-model="sendOrderForm.sendDocuments.state">
                                                            <option value="">Choose state</option>
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
                                                        <select name="countryDoc"
                                                                class="slider-order__select select-order"
                                                                v-validate="'required'"
                                                                :class="{'required': errors.has('countryDoc')}"
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
                                            <div class="body-bottom"
                                                 v-if="!foreignCheck || (foreignCheck && vehicleCheck)">
                                                <div class="body-bottom__upload">Please, upload you ID photo</div>
                                                <div class="upload-file-container">
                                                    <div class="upload-file-container__text">
                                                        <span class="upload-file-container__btn">Choose file</span>
                                                        <input type="file"
                                                               name="sendDocumentsUploadFile"
                                                               class="upload-file-container__photo"
                                                               @change="uploadFileDocuments">
                                                    </div>
                                                    <div class="upload-file-container__image-demo">
                                                        <img class="image-demo" src="#" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- USPPI && FPPI-->
                                <div class="slider-order__slide slide-6">
                                    <div class="usspi-block" v-if="!foreignCheck">
                                        <div class="usspi-block__title">
                                            WRITTEN AUTHORIZATION TO PREPARE OR <br>TRANSMIT SHIPPER’S EXPORT
                                            INFORMATION
                                        </div>
                                        <form id="usspi-form">
                                            <div class="usspi-block__content">
                                                <div class="content-authorize">
                                                    I,
                                                    <input class="inp-content" name="firstExporterName"
                                                           v-model="sendOrderForm.usppi.firstExporterName">
                                                    <input class="inp-content" name="secondExporterName"
                                                           v-model="sendOrderForm.usppi.secondExporterName">, authorize
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
                                                        <span class="canvas">
                                                            <VueSignaturePad
                                                                    width="300px"
                                                                    height="200px"
                                                                    ref="usppiSignaturePad"
                                                                    class="signature-pad"
                                                            />
                                                            <span class="canvas__btn-clear"
                                                                  @click="usppiSignatureClear">
                                                                Clear
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="content-print">
                                                    <label class="label-content">
                                                        Print Name:
                                                        <input class="inp-content inp-print" name="printName"
                                                               v-model="sendOrderForm.usppi.printName">
                                                    </label>
                                                </div>
                                                <div class="content-ein">
                                                    <label class="label-content">
                                                        E.I.N. (TAX ID):
                                                        <input class="inp-content inp-ein" name="einTaxId"
                                                               v-model="sendOrderForm.usppi.einTaxId">
                                                    </label>
                                                </div>
                                                <div class="content-title">
                                                    <label class="label-content">
                                                        Title:
                                                        <input class="inp-content inp-title" name="titleFirst"
                                                               v-model="sendOrderForm.usppi.titleFirst">*<input
                                                            class="inp-content" name="titleSecond"
                                                            v-model="sendOrderForm.usppi.titleSecond">
                                                    </label>
                                                </div>
                                                <div class="content-date">
                                                    <label class="label-content">
                                                        Date:
                                                        <input class="inp-content inp-date" name="dateFirst"
                                                               v-model="sendOrderForm.usppi.dateFirst">*<input
                                                            class="inp-content" name="dateSecond"
                                                            v-model="sendOrderForm.usppi.dateSecond">
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="fppi-block" v-if="foreignCheck">
                                        <div class="fppi-block__title">
                                            EXPORT WRITTEN AUTHORIZATION FOR F.P.P.I.<br>
                                            (Foreign Principal Party in Interest)
                                        </div>
                                        <div class="fppi-block__subtitle">
                                            WRITTEN AUTHORIZATION<br>
                                            TO PREPARE OR TRANSMIT ELECTRONIC EXPORT INFORMATION (EEI)
                                        </div>
                                        <form id="fppi-form">
                                            <div class="fppi-block__content">
                                                <p>
                                                    Know all men by these presents, that
                                                    <span class="content-name">
                                                        <input class="inp-fppi" type="text"
                                                               v-model="sendOrderForm.fppi.name">
                                                    </span>
                                                    the F.P.P.I,
                                                </p>
                                                <p>
                                                    Organized and doing business under the laws of (International
                                                    Country)
                                                    <span class="content-country">
                                                        <input class="inp-fppi" type="text"
                                                               v-model="sendOrderForm.fppi.country">
                                                    </span><br>
                                                    And having an office and place of business located
                                                    <span class="content-address">
                                                        <input class="inp-fppi" type="text"
                                                               v-model="sendOrderForm.fppi.address">
                                                    </span>
                                                </p>
                                                <p>
                                                    Hereby
                                                    authorizes ATMLMPINUTESRANATINIOCNA.Land on its behalf as a true and
                                                    lawful agent of the Foreign Principal Party in Interest (FPPI) for,
                                                    and
                                                    in the name, place and stead of the FPPI, from this date, either in
                                                    writing, electronically, or by other authorized means to:
                                                </p>
                                                <p>
                                                    Act as
                                                    Forwarding Agent for Export Control, U.S. Census Bureau (Census
                                                    Bureau)
                                                    reporting, and U.S. Customs and Border Protection (CBP) purposes.
                                                    Also,
                                                    to prepare and transmit any Electronic Export Information (EEI) or
                                                    other
                                                    documents or records required to be filed by the Census Bureau, CBP,
                                                    the
                                                    Bureau of Industry and Security, or any other U.S. Government
                                                    agency,
                                                    and perform any other act that may be required by law or regulation
                                                    in
                                                    connection with the exportation or transportation of any goods
                                                    shipped
                                                    or consigned by or the USPPI, and to receive or ship any goods on
                                                    behalf
                                                    of the F.P.P.I.
                                                </p>
                                                <p>
                                                    The FPPI hereby certifies that all statements and
                                                    information contained in the documentation provided to the
                                                    authorized
                                                    agent and relating to exportation will be true and correct.
                                                    Furthermore,
                                                    the FPPI (Foreign Principal Party in Interest) understands that
                                                    civil
                                                    and criminal penalties may be imposed for making false or fraudulent
                                                    statements or for the violation of any United States laws or
                                                    regulations
                                                    on exportation.
                                                </p>
                                                <p>
                                                    This power of attorney is to remain in full forces and
                                                    effect until revocation in writing is duly given by the Foreign
                                                    Principal Party in Interest and received by the Authorized Agent.
                                                </p>
                                                <!--<label class="content-lbl">
                                                    In Witness Whereof,
                                                    <input class="inp-fppi" type="text"
                                                           v-model="sendOrderForm.fppi.witnessWhereof">
                                                </label>-->
                                                <label class="content-lbl">
                                                    Witness:
                                                    <input type="text" class="inp-fppi"
                                                           v-model="sendOrderForm.fppi.witness">
                                                </label>
                                                <label class="content-lbl">
                                                    Signature:
                                                    <span class="canvas">
                                                        <VueSignaturePad
                                                                width="300px"
                                                                height="200px"
                                                                ref="fppiSignaturePad"
                                                                class="signature-pad"
                                                        />
                                                        <span class="canvas__btn-clear" @click="fppiSignatureClear">
                                                            Clear
                                                        </span>
                                                    </span>
                                                </label>
                                                <label class="content-lbl">
                                                    Title:
                                                    <input type="text" class="inp-fppi"
                                                           v-model="sendOrderForm.fppi.title">
                                                </label>
                                                <label class="content-lbl">
                                                    Date:
                                                    <input type="text" class="inp-fppi"
                                                           v-model="sendOrderForm.fppi.date">
                                                </label>
                                                <label class="content-lbl">
                                                    Foreign Principal in Part in Interest (FPPI) V.A.T.#
                                                    <input type="text" class="inp-fppi"
                                                           v-model="sendOrderForm.fppi.foreign">
                                                </label>

                                                <p>Export shipments are subject to inspection by U.S. Customs Service,
                                                    ALPI USA INC., and/or Office of Export Enforcement.</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- COMMENTS -->
                                <div class="slider-order__slide slide-7">
                                    <div class="slider-order__title">DESCRIPTION OF GOODS</div>
                                    <form id="form-comment">
                                        <div class="slider-order__comment">
                                            <label for="comment">Comment</label>
                                            <textarea name="comment" class="slider-order__textarea"
                                                      id="comment" v-model="sendOrderForm.comments.comment"></textarea>
                                        </div>
                                    </form>
                                    <div class="slider-order__row slider-order__row-center rules-block">
                                        <input id="agree-checked" class="inp-checkbox" type="checkbox">
                                        <label for="agree-checked" class="checked-block__label checked-block__label-rules">
                                            I have read and agree with
                                        </label>
                                        <span class="slider-order__rules" @click="togglePopup">
                                            rules &amp; regulations
                                        </span>
                                    </div>
                                    <div class="slider-order__row">
                                        <button class="btn-continue btn-disabled" id="btn-continue"
                                                @click="btnSendForms"
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

        <popup-rules-regulations
                :openRules="openRules"
                @closeRules="closeRules"
        ></popup-rules-regulations>

    </div>
</template>

<script>

    Vue.component('popup-rules-regulations', require('../PopupRulesRegulations/PopupRulesRegulations').default);

    import Slick from 'vue-slick';

    export default {
        name: "OrderPageComponent",
        components: {Slick},
        data() {
            return {
                transport: 'air',
                delivery: 'citizen',
                description: 'other',
                vehicleCheck: false,
                businessCheck: false,
                foreignCheck: false,
                isValidateForms: false,
                einTitle: 'EIN/SS#',
                sendOrderForm: {
                    typeTransport: 'air',
                    shipper: {
                        ein: '',
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
                        zip: '',
                        uploadFile: ''
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
                        zip: '',
                        uploadFile: ''
                    },
                    usppi: {
                        firstExporterName: '',
                        secondExporterName: '',
                        signature: '',
                        printName: '',
                        einTaxId: '',
                        titleFirst: '',
                        titleSecond: '',
                        dateFirst: '',
                        dateSecond: ''
                    },
                    fppi: {
                        name: '',
                        country: '',
                        address: '',
                        witnessWhereof: '',
                        witness: '',
                        signature: '',
                        title: '',
                        date: '',
                        foreign: ''
                    },
                    comments: {
                        comment: ''
                    }
                },
                dots: ['Shipper', 'Consignee', 'Notify', 'Description', 'Title', 'USPPI', 'Comments'],
                slickOptions: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '<button class="slider-order__arrow-prev" id="arrow-prev">Back</button>',
                    nextArrow: '<button class="slider-order__arrow-next" id="arrow-next">Next</button>',
                    dots: true,
                    arrows: true,
                    infinite: false,
                    draggable: false,
                    adaptiveHeight: true,
                    // initialSlide: 6,
                    customPaging: (slider, i) => {
                        return this.dots[i];
                    }
                },
                openRules: false
            };
        },
        methods: {
            isValidForms() {
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        console.log('%c Form Submitted!', 'color: green; font-weight: 600;');
                        this.isValidateForms = true;
                        this.submitForms();
                        return;
                    }

                    console.log('%c Correct them errors!', 'color: red; font-weight: 600;');

                    this.isValidateForms = false;

                    $('#required-fields').fadeIn();
                    setTimeout(function () {
                        $('#required-fields').fadeOut();
                    }, 5000);
                });
            },
            submitForms() {

                if (this.isValidateForms) {
                    console.log('======> ok!!!!!');

                    axios({
                        method: 'post',
                        url: '/email/air_shipping_order',
                        data: this.sendOrderForm
                    })
                        .then(res => {
                            console.log(res);
                            $('#message-success').addClass('fadeIn');
                            $('#form-quick-quote').trigger("reset");
                            setTimeout(function () {
                                $('#message-success').removeClass('fadeIn');
                            }, 4000);
                        })
                        .catch(err => {
                            console.log('Error', err);
                            $('#message-server-error').addClass('fadeIn');
                            setTimeout(function () {
                                $('#message-server-error').removeClass('fadeIn');
                            }, 4000);
                        });

                }

            },
            btnSendForms() {
                if (this.delivery === 'foreign') {
                    this.fppiSaveImg();
                } else {
                    this.usppiSaveImg();
                }

                this.isValidForms();
            },
            uploadFileShipper(el) {
                this.readURLShipper(el.target);
            },
            readURLShipper(input) {

                // console.log(input);

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = (e) => {
                        $(input).closest('.upload-file-container').find('.image-demo').attr('src', e.target.result);
                        this.sendOrderForm.shipper.uploadFile = e.target.result;
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            },
            uploadFileDocuments(el) {
                this.readURLDocuments(el.target);
            },
            readURLDocuments(input) {

                // console.log(input);

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = (e) => {
                        $(input).closest('.upload-file-container').find('.image-demo').attr('src', e.target.result);
                        this.sendOrderForm.sendDocuments.uploadFile = e.target.result;
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            },
            usppiSignatureClear() {
                this.$refs.usppiSignaturePad.clearSignature();
            },
            fppiSignatureClear() {
                this.$refs.fppiSignaturePad.clearSignature();
            },
            usppiSaveImg() {
                const {isEmpty, data} = this.$refs.usppiSignaturePad.saveSignature();
                // console.log(data);
                this.sendOrderForm.usppi.signature = data;
            },
            fppiSaveImg() {
                const {isEmpty, data} = this.$refs.fppiSignaturePad.saveSignature();
                // console.log(data);
                this.sendOrderForm.fppi.signature = data;
            },
            togglePopup() {
                this.openRules = true;
            },
            closeRules() {
                this.openRules = false;
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
                // console.log(value);
                switch (value) {
                    case 'citizen':
                        this.businessCheck = false;
                        this.foreignCheck = false;
                        this.einTitle = 'EIN/SS#';
                        this.dots[5] = 'USPPI';
                        this.reInit();
                        break;
                    case 'business':
                        this.businessCheck = true;
                        this.foreignCheck = false;
                        this.einTitle = 'EIN/SS#';
                        this.dots[5] = 'USPPI';
                        this.reInit();
                        break;
                    case 'foreign':
                        this.businessCheck = false;
                        this.foreignCheck = true;
                        this.einTitle = 'BUSINESS ID#';
                        this.dots[5] = 'FPPI';
                        this.reInit();
                        break;
                    default:
                        break;
                }
            },
            description(value) {
                // console.log(value);
                this.vehicleCheck = !this.vehicleCheck;
                this.description = value;
            },
            transport(value) {
                // console.log(value);
                this.sendOrderForm.typeTransport = value;
            }
        }
    }
</script>

<style>

</style>