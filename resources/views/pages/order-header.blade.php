<div id="order">
    <div class="container container-order">
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <div class="buttons-control" id="buttons-control">
                    <button class="buttons-control__btn active" data-order="air">AIR SHIPPING FORM</button>
                    <button class="buttons-control__btn" data-order="ocean">OCEAN SHIPPING FORM</button>
                    <button class="buttons-control__btn" data-order="usspi">USPPI Written Authorization</button>
                </div>
            </div>
            <div class="col-md-12 col-lg-9 col-xl-8">
                <div class="order-block">
                    <div class="slider-order" id="slider-order">
                        <div class="slider-order__slide">
                            <form id="form-shipper">
                                <div class="slider-order__title">SHIPPER</div>
                                <div class="checked-block">
                                    <input name="citizen" id="citizen" class="inp-checkbox" type="checkbox">
                                    <label for="citizen" class="checked-block__label">US citizen</label>
                                    <input name="business" id="business" class="inp-checkbox" type="checkbox">
                                    <label for="business" class="checked-block__label">Business</label>
                                </div>
                                <div class="slider-order__body">
                                    <div class="body-left">
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                TID/SS#:
                                                <input name="tid" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                First name:
                                                <input name="firstName" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                Second name:
                                                <input name="secondName" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                Address:
                                                <input name="address" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                E-mail:
                                                <input name="email" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                Phone:
                                                <input name="phone" class="slider-order__inp only-number">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                Fax:
                                                <input name="fax" class="slider-order__inp">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="body-right">
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                City:
                                                <input name="city" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                State (US only):
                                                <select name="state" class="slider-order__select select-order">
                                                    <option value="">Choose country</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                Province:
                                                <input name="province" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                Country:
                                                <select name="country" class="slider-order__select select-order">
                                                    <option value="">Choose country</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                ZIP:
                                                <input name="zip" class="slider-order__inp only-number"
                                                       maxlength="10">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="slider-order__slide">
                            <form id="form-consignee">
                                <div class="slider-order__title">CONSIGNEE</div>
                                <div class="slider-order__body">
                                    <div class="body-left">
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                TID/SS#:
                                                <input name="tid" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                First name:
                                                <input name="firstName" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                Second name:
                                                <input name="secondName" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                Address:
                                                <input name="address" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                E-mail:
                                                <input name="email" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                Phone:
                                                <input name="phone" class="slider-order__inp only-number">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                Fax:
                                                <input name="fax" class="slider-order__inp">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="body-right">
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                City:
                                                <input name="city" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                State (US only):
                                                <select name="state" class="slider-order__select select-order">
                                                    <option value="">Choose country</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                Province:
                                                <input name="province" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                Country:
                                                <select name="country" class="slider-order__select select-order">
                                                    <option value="">Choose country</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                ZIP:
                                                <input name="zip" class="slider-order__inp only-number"
                                                       maxlength="10">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="slider-order__slide">
                            <form id="form-send-documents-to">
                                <div class="slider-order__title">SEND DOCUMENTS TO:</div>
                                <div class="slider-order__body-left">
                                    <div class="body-left">
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-title">
                                                Air Waybill:
                                                <select name="airWaybill" class="slider-order__select select-order">
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
                                                <input name="firstName" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                Second name:
                                                <input name="secondName" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                Address:
                                                <input name="address" class="slider-order__inp">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="body-right">
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                City:
                                                <input name="city" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                State (US only):
                                                <select name="state" class="slider-order__select select-order">
                                                    <option value="">Choose country</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                Province:
                                                <input name="province" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                Country:
                                                <select name="country" class="slider-order__select select-order">
                                                    <option value="">Choose country</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                ZIP:
                                                <input name="zip" class="slider-order__inp only-number"
                                                       maxlength="10">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="slider-order__slide">
                            <form id="form-notify-party">
                                <div class="slider-order__title">NOTIFY PARTY</div>
                                <div class="slider-order__body-left">
                                    <div class="body-left">
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-title">
                                                Notify Party:
                                                <select name="notifyParty"
                                                        class="slider-order__select select-order">
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
                                                <input name="firstName" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                Second name:
                                                <input name="secondName" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                Address:
                                                <input name="address" class="slider-order__inp">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="body-right">
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                City:
                                                <input name="city" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                State (US only):
                                                <select name="state" class="slider-order__select select-order">
                                                    <option value="">Choose country</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                Province:
                                                <input name="province" class="slider-order__inp">
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label slider-order__label-required">
                                                Country:
                                                <select name="country" class="slider-order__select select-order">
                                                    <option value="">Choose country</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="slider-order__row">
                                            <label class="slider-order__label">
                                                ZIP:
                                                <input name="zip" class="slider-order__inp only-number"
                                                       maxlength="10">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="slider-order__slide">
                            <div id="air-block">
                                <form id="form-description-of-goods">
                                    <div class="slider-order__title">DESCRIPTION OF GOODS</div>
                                    <div class="slider-order__body-center">
                                        <div class="body-center">
                                            <div class="slider-order__row">
                                                <div class="usd-title">USD VALUE</div>
                                            </div>
                                            <div class="slider-order__row">
                                                <span class="slider-order__number">1</span>
                                                <input class="slider-order__inp slider-order__inp-desc">
                                                <input class="slider-order__inp slider-order__inp-usd only-number"
                                                       maxlength="10">
                                                <span class="dollar">&dollar;</span>
                                            </div>
                                            <div class="slider-order__row">
                                                <span class="slider-order__number">2</span>
                                                <input class="slider-order__inp slider-order__inp-desc">
                                                <input class="slider-order__inp slider-order__inp-usd only-number"
                                                       maxlength="10">
                                                <span class="dollar">&dollar;</span>
                                            </div>
                                            <div class="slider-order__row">
                                                <span class="slider-order__number">3</span>
                                                <input class="slider-order__inp slider-order__inp-desc">
                                                <input class="slider-order__inp slider-order__inp-usd only-number"
                                                       maxlength="10">
                                                <span class="dollar">&dollar;</span>
                                            </div>
                                            <div class="slider-order__row">
                                                <span class="slider-order__number">4</span>
                                                <input class="slider-order__inp slider-order__inp-desc">
                                                <input class="slider-order__inp slider-order__inp-usd only-number"
                                                       maxlength="10">
                                                <span class="dollar">&dollar;</span>
                                            </div>
                                            <div class="slider-order__row">
                                                <span class="slider-order__number">5</span>
                                                <input class="slider-order__inp slider-order__inp-desc">
                                                <input class="slider-order__inp slider-order__inp-usd only-number"
                                                       maxlength="10">
                                                <span class="dollar">&dollar;</span>
                                            </div>
                                            <div class="slider-order__row">
                                                <span class="slider-order__number">6</span>
                                                <input class="slider-order__inp slider-order__inp-desc">
                                                <input class="slider-order__inp slider-order__inp-usd only-number"
                                                       maxlength="10">
                                                <span class="dollar">&dollar;</span>
                                            </div>
                                            <div class="slider-order__row">
                                                <span class="slider-order__number">7</span>
                                                <input class="slider-order__inp slider-order__inp-desc">
                                                <input class="slider-order__inp slider-order__inp-usd only-number"
                                                       maxlength="10">
                                                <span class="dollar">&dollar;</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="itinerary-block">
                                        <span class="itinerary">ITINERARY</span>
                                        <label class="slider-order__label slider-order__label-required slider-order__label-from">
                                            From:
                                            <input name="from" class="slider-order__inp">
                                        </label>
                                        <label class="slider-order__label slider-order__label-required slider-order__label-to">
                                            To:
                                            <input name="to" class="slider-order__inp">
                                        </label>
                                    </div>
                                    <div class="additional-block">
                                        <span class="additional">Additional fees and charges:</span>
                                        <span class="insurance-text">Insurance</span>
                                        <input name="insurance" id="insurance-air" class="inp-checkbox"
                                               type="checkbox">
                                        <label for="insurance-air" class="checked-block__label"></label>
                                    </div>
                                </form>
                            </div>
                            <div id="ocean-block">
                                <form id="form-vehicle">
                                    <div class="slider-order__title">VEHICLE</div>
                                    <div class="slider-order__body">
                                        <div class="body-left body-vehicle">
                                            <div class="slider-order__row">
                                                <label class="slider-order__label slider-order__label-required">
                                                    Year:
                                                    <input name="year" class="slider-order__inp only-number">
                                                </label>
                                            </div>
                                            <div class="slider-order__row">
                                                <label class="slider-order__label slider-order__label-required">
                                                    Make:
                                                    <input name="make" class="slider-order__inp">
                                                </label>
                                            </div>
                                            <div class="slider-order__row">
                                                <label class="slider-order__label slider-order__label-required">
                                                    Model:
                                                    <input name="model" class="slider-order__inp">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="body-right">
                                            <div class="slider-order__row">
                                                <label class="slider-order__label slider-order__label-required">
                                                    Body:
                                                    <input name="body" class="slider-order__inp">
                                                </label>
                                            </div>
                                            <div class="slider-order__row">
                                                <label class="slider-order__label slider-order__label-required">
                                                    Colour:
                                                    <input name="colour" class="slider-order__inp">
                                                </label>
                                            </div>
                                            <div class="slider-order__row">
                                                <label class="slider-order__label slider-order__label-required">
                                                    6 Last VIN#:
                                                    <input name="vin" class="slider-order__inp">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-order__row slider-order__row-center">
                                        <label class="slider-order__label slider-order__label-required slider-order__label-vehicle">
                                            Value of vehicle:
                                            <input name="valueOfVehicle"
                                                   class="slider-order__inp slider-order__inp-vehicle only-number">
                                            <span class="dollar">&dollar;</span>
                                        </label>
                                    </div>
                                    <div class="additional-block">
                                        <span class="additional">Additional fees and charges:</span>
                                        <span class="insurance-text">Insurance (1.5%)</span>
                                        <input name="insurance" id="insurance-ocean" class="inp-checkbox"
                                               type="checkbox">
                                        <label for="insurance-ocean" class="checked-block__label"></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="slider-order__slide">
                            <form id="form-comment">
                                <div class="slider-order__title">DESCRIPTION OF GOODS</div>
                                <div class="slider-order__comment">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" class="slider-order__textarea" id="comment"></textarea>
                                </div>
                            </form>
                            <div class="slider-order__row slider-order__row-center">
                                <input id="agree-checked" class="inp-checkbox" type="checkbox">
                                <label for="agree-checked" class="checked-block__label">I have read and agree with
                                    <a
                                            class="slider-order__href" href="#">rules &amp; regulations</a></label>
                                <span class="additional"></span>
                            </div>
                            <div class="slider-order__row">
                                <button class="btn-continue btn-disabled" id="btn-continue" disabled>Continue
                                </button>
                            </div>
                            <div class="required-fields" id="required-fields">Fill in required fields</div>
                        </div>
                    </div>

                    <div class="usspi-block" id="usspi-block">
                        <div class="usspi-block__title">
                            WRITTEN AUTHORIZATION TO PREPARE OR <br>TRANSMIT SHIPPER’S EXPORT INFORMATION
                        </div>
                        <div class="usspi-block__content">
                            <div class="content-authorize">I, <input class="inp-content"><input class="inp-content">, authorize</div>
                            TMM international, to act as forwarding agent for export control and customs purposes and to sign any Shipper’s Export Declaration (SED), or transmit such export information electronically, which may be required by law or regulation in connection with the exportation or transportation of any merchandise on behalf of said U.S. Principal Party in Interest. The U.S. Principal Party in Interest certifies that necessary and proper documentation to accurately complete the SED or transmit the information electronically is and will be provided to the said forwarding Agent. The U.S. Principal Party in Interest further understands that civil and criminal penalties may be imposed for making false or fraudulent statements or for the violation of any United State laws or regulations on exportation and agrees to be bound by all statements of said agent based upon information or documentation provided by exporter to said agent.
                            <div class="content-signature">
                                <label class="label-content">
                                    Signature:
                                    <input class="inp-content inp-signature">*<input class="inp-content">
                                </label>
                            </div>
                            <div class="content-print">
                                <label class="label-content">
                                    Print Name:
                                    <input class="inp-content inp-print">
                                </label>
                            </div>
                            <div class="content-ein">
                                <label class="label-content">
                                    E.I.N. (TAX ID):
                                    <input class="inp-content inp-ein">
                                </label>
                            </div>
                            <div class="content-title">
                                <label class="label-content">
                                    Title:
                                    <input class="inp-content inp-title">*<input class="inp-content">
                                </label>
                            </div>
                            <div class="content-date">
                                <label class="label-content">
                                    Date:
                                    <input class="inp-content inp-date">*<input class="inp-content">
                                </label>
                            </div>
                            <button class="usspi-block__btn">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>