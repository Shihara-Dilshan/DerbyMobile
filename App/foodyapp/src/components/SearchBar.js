import React from 'react';
import {View, TextInput, Dimensions} from 'react-native';
import Icon from "react-native-vector-icons/Ionicons";
import * as Animatable from 'react-native-animatable';

const SearchBar = () => {
    const width = Dimensions.get("window").width;

    return(
        <Animatable.View animation="bounceInLeft" delay={500} duration={2000}>
          <View
            style={{
              flexDirection: "row",
              justifyContent: "center",
              alignItems: "center",
              backgroundColor: "#e0e0e0",
              borderRadius: 20,
              width: width,
              marginBottom: 20,
            }}
          >
            <TextInput
              placeholder="Search"
              onChangeText={(searchString) => {}}
              underlineColorAndroid="transparent"
              style={{
                flex: 1,
                paddingTop: 10,
                paddingRight: 20,
                paddingBottom: 10,
                paddingLeft: 20,
                color: "white",
              }}
            />
            <Icon
              style={{ padding: 10 }}
              name="ios-search"
              size={20}
              color="#000"
            />
          </View>
       </Animatable.View>
    );
} 

export default SearchBar;